@extends('layouts.admin')

@section('content')
<div class="box box-primary col-md-6">
	<div class="box-header with-border">
		<h3 class="box-title">Detail Data Peminjam</h3>
	</div>
	<div class="box-body">
		<form role="form" action="{{url('/barang_kembali')}}" method="POST">
			{{csrf_field()}}
			<div class="form-group">
				<label>Nama Peminjam</label>
				<input type="text" class="form-control" value="{{$data->nama}}" disabled>
			</div>

			<div class="form-group">
				<label>Kelas Peminjam</label>
				<input type="text" class="form-control" value="{{$data->kelas}}" disabled>
			</div>

			<div class="form-group">
				<label>Tanggal Pinjam</label>
				<input type="text" class="form-control" value="{{$data->tanggal}}" disabled>
			</div>

			<div class="form-group">
				<label>Jam Pinjam</label>
				<input type="text" class="form-control" value="{{$data->jam}}" disabled>
			</div>

			<div class="form-group">
				<label>Jumlah</label>
				<input type="text" class="form-control" name="jumlah" value="{{$data->stok}}" disabled>
			</div>

			<input type="hidden" name="idpeminjam" value="{{$data->id}}">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<button type="submit" class="btn btn-primary">Barang Kembali</button>
		</form>
	</div>
	<!-- /.box-body -->
</div>

@endsection