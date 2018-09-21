@extends('layouts.admin')

@section('content')

	<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Barang</h3>


               <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Nama Barang</th>
                  <th>Status</th>
                  <th class="text-center"></th>
                </tr>
                @foreach($q as $data)
                <tr>
                  <td>{{$data->namabarang}}</td>
                  <td>
                  	@if($data->stok == 0)
                  	<span class="label label-warning">Habis</span>
                  	@elseif($data->stok != 0)
                  	<span class="label label-primary">Tersedia</span>
                  	@else
                  	<span class="label label-danger">Rusak</span>
                  	@endif
                  </td>
                  <td class="text-center">
                  	@if($data->stok == 0)
                  	<a href="" class="btn btn-primary btn-sm disabled">Terpinjam</a>
                  	@elseif($data->stok != 0)
                  	<a href="{{url('/pinjambarang/' .$data->id)}}" class="btn btn-primary btn-sm">Pinjam</a>
                  	@else
                  	<a href="" class="btn btn-primary btn-sm disabled">Rusak</a>
                  	@endif
                  </td>
                </tr>
                @endforeach
              </table>
            </div>

              
            </div>
        </div>
    </div>
</div>

@endsection