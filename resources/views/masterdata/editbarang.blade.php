@extends('layouts.admin')

@section('content')

<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Edit Barang</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form role="form" action="{{url('/updatebarang')}}" method="post">
		<div class="box-body">
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="exampleInputPassword1">Nama Barang</label>
						<input type="text" name="namabarang" value="{{$edit->namabarang}}" class="form-control" id="exampleInputPassword1">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="exampleInputPassword1">Stok</label>
						<input type="text" name="stok" class="form-control" value="{{$edit->stok}}" id="exampleInputPassword1">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Status</label>
							<select name="status" class="form-control select2" style="width: 100%;">
								<option selected="selected" value="3">Rusak</option>
							</select>
						</div>
					</div>
				</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="exampleInputPassword1">jumlah</label>
						<input type="text" name="jumlah" value="{{@$data->jumlah}}" class="form-control" id="exampleInputPassword1">
					</div>
				</div>
			</div>
			</div>
			<input type="hidden" name="id" value="{{$edit->id}}">
			<input type="hidden" name="_token" value="{{csrf_token()}}">

			@if(@$data->jumlah > 0)
			<button type="submit" class="btn btn-primary" disabled="">Edit</button>
			<button type="submit" class="btn btn-warning">Barang Kembali</button>

			@else
			<button type="submit" class="btn btn-primary">Edit</button>
			<button type="submit" class="btn btn-warning" disabled="">Barang Kembali</button>
			@endif

		</div>
	</form>
</form>
</div>

@endsection
