@extends('layouts.admin')

@section('content')

            <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Peminjam</h3>




              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>



              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Nomor Barang</th>
                  <th>Nama Barang</th>
                  <th>Nama Peminjam</th>
                  <th>Tanggal</th>
                  <th>Kelas</th>
                  <th>Jam Pinjam</th>
                  <th class="text-center">Action</th>
                </tr>
                @foreach($q as $data)
                <tr>
                  <td>{{$data->nomorbarang}}</td>
                  <td>{{$data->namabarang}}</td>
                  <td>{{$data->nama}}</td>
                  <td>{{$data->tanggal}}</td>
                  <td>{{$data->kelas}}</td>
                  <td>{{$data->jam}}</td>
                  <td class="text-center">
                  	<a href="{{url('/detail_pinjam/' .$data->id)}}" class="btn btn-warning btn-sm">Detail</a>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

@endsection
