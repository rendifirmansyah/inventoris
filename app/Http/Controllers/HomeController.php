<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\peminjam;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function databarang()
    {
        $q = barang::all();
        return view('masterdata.databarang')->with('q',$q);
    }

    public function tambahbarang()
    {
        return view('masterdata.tambahbarang');   
    }

    public function postbarang(Request $r)
    {
        $q = new barang;
        $q->namabarang = $r->input('namabarang');
        $q->status = $r->input('status');
        $q->statusbarang = $r->input('statusbarang');
        $q->stok = $r->input('stok');
        $q->save();

        return redirect(url('/databarang'));
    }

    public function editbarang($id)
    {
        if (\App\rusak::where('idbarang',$id)->count() > 0) {
        $edit = barang::find($id);
        $q = \App\rusak::where('idbarang',$id)->first();
        return view('masterdata.editbarang')->with('data',$q)->with('edit',$edit);
        }else{
           $edit = barang::find($id);
        $q = \App\rusak::where('idbarang',$id)->first();
        return view('masterdata.editbarang')->with('data',$q)->with('edit',$edit); 
        }
    }

    public function updatebarang(Request $r)
    {
        if (\App\rusak::where('idbarang',$r->input('id'))->count() != 0) {
        $q = barang::find($r->input('id'));
        $input = $r->input('jumlah');
        $q->stok += $input;
        $q->save();

        $s  = \App\rusak::where('idbarang',$r->input('id'))->first();
        $s->idbarang = $r->input('id');
        $sisa = $s->jumlah - $input;
        if($sisa > 0) {
        $s->jumlah -= $input;
        $s->status = 3; 
        $s->save();
        }
        elseif ($sisa == 0) {
            $s->delete();
        }


        return redirect(url('/databarang'));
    }else{

        $q = barang::find($r->input('id'));
        $input = $r->input('jumlah');
        $q->stok -= $input;
        $q->save();

        $s  = new \App\rusak;
        $s->idbarang = $r->input('id');
        $s->jumlah = $input;
        $s->status = 3; 

        $s->save();

        return redirect(url('/databarang'));
        }
    }

    public function hapusbarang($id)
    {
        $q = barang::find($id);
        $a = peminjam::where('nomorbarang',$q->id)->delete();
        $q->delete();

        return redirect(url('/databarang'));
    }
}
