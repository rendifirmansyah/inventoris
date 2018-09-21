@extends('layouts.admin')

@section('content')

<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Isi Data Tujuan Pemutasian Barang</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form role="form" action="{{url('/mutasi/post')}}" method="post">
		{{csrf_field()}}
		<div class="box-body">

			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="exampleInputPassword1">Tujuan Mutasi</label>
						<input type="text" name="tujuan" class="form-control" id="exampleInputPassword1">
					</div>
				</div>
			</div>

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
						<label for="exampleInputPassword1">Jumlah</label>
						<input type="text" name="jumlah" class="form-control" id="exampleInputPassword1">
						<label for="exampleInputPassword1"><font style="color: red"> Stok : {{$edit->stok}} </font></label>
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

			<button type="submit" class="btn btn-primary">Mutasi</button>
		</div>
	</form>
</form>
</div>

@endsection
