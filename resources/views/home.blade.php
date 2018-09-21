  @extends('layouts.admin')

  @section('content')

  <div class="row" style="display: flex;justify-content: center;">
    <div class="col-md-5 col-xs-12">
     <div class="small-box bg-aqua">
      <div class="inner">
        <?php
        $barang = DB::table('barangs')->count();
        ?>

        <h3>{{$barang}}</h3>

        <p>JUMLAH BARANG</p>
      </div>
      <div class="icon">
        <i class="fa  fa-pie-chart"></i>
      </div>
      <a href="{{url('/databarang')}}" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <div class="col-md-5 col-xs-12">
   <div class="small-box bg-yellow">
    <div class="inner">
      <h4><b> PINJAM BARANG </b></h4>

      <p>Klik untuk pinjam <br>barang</p>
    </div>
    <div class="icon">
      <i class="ion ion-person-add"></i>
    </div>
    <a href="{{url('/pinjam_barang')}}" class="small-box-footer">
      Klik Disini <i class="fa fa-arrow-circle-right"></i>
    </a>
  </div>
</div>
</div>

<div class="row" style="display: flex;justify-content: center;">
  <div class="col-md-5 col-xs-12">
    <div class="small-box bg-red">
      <div class="inner">
        <h4><b> MUTASI BARANG </b></h4>

        <p>Klik untuk mutasi <br>barang</p>
      </div>
      <div class="icon">
        <i class="fa  fa-sign-out"></i>
      </div>
      <a href="{{url('/mutasi/home')}}" class="small-box-footer">
        Klik Disini <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <div class="col-md-5 col-xs-12">
    <div class="small-box bg-green">
      <div class="inner">
        <h4><b> BARANG MASUK </b></h4>

        <p>Klik untuk tambah <br>barang</p>
      </div>
      <div class="icon">
        <i class="fa  fa-sign-in"></i>
      </div>
      <a href="{{url('/tambahbarang')}}" class="small-box-footer">
        Klik Disni <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- small box -->
  

  

  

  
</div>

@endsection
