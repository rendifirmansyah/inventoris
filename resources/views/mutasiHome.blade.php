@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Barang Tersedia</h3>




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
                  <th>Nama Barang</th>
                  <th>Status Barang</th>
                  <th>Jenis Barang</th>
                  <th>Stok Barang</th>
                  <th class="text-center">Action</th>
                </tr>
                @foreach($data as $data)
                <tr>
                  <td>{{$data->namabarang}}</td>
                  <td>
                  	@if($data->stok != 0)
                  	<span class="label label-primary">Tersedia</span>
                  	@elseif($data->stok == 0)
                  	<span class="label label-warning">Barang Habis</span>
                  	@else
                  	<span class="label label-danger">Rusak</span>
                  	@endif
                  </td>
                  <td>
                    @if($data->statusbarang == 1)
                    <span class="label label-primary">Barang Internal</span>
                    @else
                    <span class="label label-warning">Barang Mutasi</span>
                    @endif
                  </td>
                  <td>{{$data->stok}}</td>
                  <td class="text-center">
                  	<a href="{{url('/mutasi/menu/' .$data->id)}}" class="btn btn-danger btn-sm">Mutasi</a>
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
