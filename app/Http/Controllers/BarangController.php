<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\barang;
use App\peminjam;
use App\mutasi;
use App\siswa;
use PDF;
use Excel;

class BarangController extends Controller
{

    public function excelbarang()
    {
        $contact = barang::all();
        return Excel::create('DataBarang', function($excel) use ($contact){
            $excel->sheet('mysheet', function($sheet) use ($contact){
                $sheet->fromArray($contact);
            });
        })->download('xls');
    }

    public function importbarang(Request $request)
    {
        if ($request->hasFile('file')) {
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path, function($reader){})->get();
            if (!empty($data) && $data->count()) {
                foreach ($data as $key => $value) {
                    $q = new siswa;
                    $q->nis                     = $value->nis;
                    $q->nik                     = $value->nik;
                    $q->nisn                    = $value->nisn;
                    $q->nama_peserta_didik      = $value->nama_peserta_didik;
                    $q->jenis_kelamin           = $value->jenis_kelamin;
                    $q->tempat_tanggal_lahir    = $value->tempat_tanggal_lahir;
                    $q->agama                   = $value->agama;
                    $q->nama_orang_tua          = $value->nama_orang_tua;
                    $q->alamat_orang_tua        = $value->alamat_orang_tua;
                    $q->nomor_ijazah            = $value->nomor_ijazah;
                    $q->tahun                   = $value->tahun;
                    $q->kelas                   = $value->kelas;
                    $q->save();
                }
            }

            return redirect(url('/home'));
        }
    }

    public function importbaranghome()
    {
        return view('excelhome');
    }

    public function pinjambarang()
    {
    	$q = barang::all();
    	return view('pinjambarang')->with('q',$q);
    }

    public function pinjam($id)
    {
    	$q = barang::find($id);
        $a = \App\siswa::all();
    	return view('pinjam')->with('a',$a)->with('edit',$q);
    }

    public function post(Request $r)
    {
    	$a = barang::find($r->idbarang);
    	/*$a->status = 2;*/

        $input = $r->input('jumlah');
        $a->stok -= $input;

        $q = new peminjam;
        $q->nama = $r->input('nama');


        $q->kelas = $r->input('kelas');
    	$q->stok = $r->input('jumlah');
    	$q->tanggal = date("d-m-Y", strtotime($r->input('tanggal')));
    	$q->jam = $r->input('jam');
    	$q->nomorbarang = $r->idbarang;
    	$q->namabarang  = $r->input('namabarang');

    	$q->save();
    	$a->save();
        return redirect(url('/data_peminjam'));
    }

    public function detail($id)
    {
        $q = peminjam::find($id);
        return view('masterdata.detail')->with('data',$q);
    }

    public function data()
    {
    	$q = peminjam::all();
    	return view('datapeminjam')->with('q',$q);
    }

    public function kembali(Request $r)
    {
        $a = peminjam::find($r->idpeminjam);
        $m = barang::find($a->nomorbarang);
        $input = $a->stok;
        $m->stok += $input;

        $m->save();
        $a->delete();

        return redirect(url('/databarang'));
    }

    public function pdf()
    {
        $data['barang'] = barang::all();
        $pdf = PDF::loadview('pdf',$data);
        return $pdf->download('DataBarang.pdf');
    }

    public function pdfmutasi()
    {
        $data['mutasi'] = mutasi::all();
        $pdf = PDF::loadview('pdfmutasi',$data);
        return $pdf->download('DataMutasiBarang.pdf');
    }

    public function pdfpinjam()
    {
        $data['pinjam'] = peminjam::all();
        $pdf = PDF::loadview('pdfpinjam',$data);
        return $pdf->download('DataPeminjamBarang.pdf');
    }

    public function mutasi_home()
    {
        $q = barang::all();
        return view('mutasiHome')->with('data',$q);
    }

    public function mutasi_menu($id)
    {
        $q = barang::find($id);
        return view('mutasiMenu')->with('edit',$q);
    }

    public function mutasi_post(Request $r)
    {
        $a = barang::find($r->idbarang);
        $input = $r->input('jumlah');
        $a->stok -= $input;
        
        $q = new mutasi;
        $q->tujuan = $r->input('tujuan');
        $q->nomorbarang = $r->input('nomorbarang');
        $q->namabarang = $r->input('namabarang');
        $q->jumlah = $r->input('jumlah');


        $q->tanggal = $r->input('tanggal');

        $q->save();
        $a->save();


        return redirect(url('/mutasi/home'));
    }
}
