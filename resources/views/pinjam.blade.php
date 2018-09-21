@extends('layouts.admin')

@section('content')

<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Isi Data Peminjam Barang</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form role="form" action="{{url('/pinjam')}}" method="post">
		{{csrf_field()}}
		<div class="box-body">

			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="exampleInputPassword1">Nomor {{$edit->namabarang}}</label>
						<input type="number" name="nomorbarang" class="form-control" id="exampleInputPassword1">
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="exampleInputPassword1">Merk {{$edit->namabarang}}</label>
						<input type="text" name="namabarang" class="form-control" id="exampleInputPassword1">
					</div>
				</div>
			</div>

			<input type="hidden" name="idbarang" value="{{$edit->id}}">

			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="exampleInputPassword1">Nama Peminjam</label>
						<input type="text" name="nama" class="form-control" id="exampleInputPassword1">
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="exampleInputPassword1">Jumlah</label>
						<input type="text" name="jumlah" class="form-control" id="exampleInputPassword1">
						<label for="exampleInputPassword1"><font style="color: red"> Stok : {{$edit->stok}} </font></label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="recipient-name" class="col-form-label">Kelas : </label>
				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<select name="kelas" class="form-control" id="sel1">
								@foreach($a as $key)
								<option value="{{$key->kelas}}">{{$key->kelas}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="row">
				<div class="col-sm-12 col-md-6 form-group">
					<label>Tanggal</label>
					<div class="input-group date">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input type="text" name="tanggal" class="form-control pull-right" id="datepicker">
					</div>
					<!-- /.input group -->
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6 bootstrap-timepicker">
					<div class="form-group">
						<label>Jam Pinjam</label>

						<div class="input-group">
							<input type="text" name="jam" class="form-control timepicker">

							<div class="input-group-addon">
								<i class="fa fa-clock-o"></i>
							</div>
						</div>
						<!-- /.input group -->
					</div>
					<!-- /.form group -->
				</div>
			</div>

			

			<button type="submit" class="btn btn-primary">Pinjam</button>
		</div>
	</form>
</form>
</div>

@endsection
