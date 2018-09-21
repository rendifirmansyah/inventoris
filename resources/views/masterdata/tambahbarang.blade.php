@extends('layouts.admin')

@section('content')

<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Tambah Barang</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form role="form" action="{{url('/postbarang')}}" method="post">
		{{csrf_field()}}
		<div class="box-body">
			<!-- <div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="exampleInputPassword1">Nomor Barang</label>
						<input type="number" name="nomorbarang" class="form-control" id="exampleInputPassword1">
					</div>
				</div>
			</div> -->
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="exampleInputPassword1">Nama Barang</label>
						<input type="text" name="namabarang" class="form-control" id="exampleInputPassword1">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Status Barang</label>
							<select name="status" class="form-control select2" style="width: 100%;">
								<option selected="selected" value="1">Tersedia</option>
								<option value="2">Dipinjam</option>
								<option value="3">Rusak</option>
							</select>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Jenis Barang</label>
							<select name="statusbarang" class="form-control select2" style="width: 100%;">
								<option selected="selected" value="1">Barang Internal</option>
								<option value="2">Barang Mutasi</option>
							</select>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="exampleInputPassword1">Stok Barang</label>
						<input type="number" name="stok" class="form-control" id="exampleInputPassword1">
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Tambah</button>
		</div>
	</form>
</form>
</div>

@endsection
