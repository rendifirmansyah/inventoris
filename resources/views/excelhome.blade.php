@extends('layouts.admin')

@section('content')
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Pilih File Untuk Di Import</h3>
	</div>
	<form role="form" action="{{url('/import/excel')}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="box-body">
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="exampleInputPassword1">Import Data</label>
						<input type="file" name="file" class="form-control" id="exampleInputPassword1">
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Tambah</button>
		</div>
	</form>
</div>
@endsection