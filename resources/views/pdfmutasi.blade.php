<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Laporan Data</title>
		<body>
			<style type="text/css">
				.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
				.tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
				.tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
				.tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
				.tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
				.tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
			</style>

			<div style="font-family:Arial; font-size:12px;">
				<center><h2>LAPORAN DATA BARANG MUTASI</h2></center>	
			</div>
			<br>
			<table class="tg">
			  <tr>
			    
			    <th class="tg-3wr7">Tujuan Mutasi<br></th>
			    <th class="tg-3wr7">Tanggal<br></th>
			    <th class="tg-3wr7">Nama Barang<br></th>
			    <th class="tg-3wr7">Jumlah Barang Mutasi<br></th>
			  </tr>
			 @foreach($mutasi as $key)
			  <tr>
			    <td class="tg-rv4w" width="20%">{{$key->tujuan}}</td>
			    <td class="tg-rv4w" width="20%">{{$key->tanggal}}</td>
			    <td class="tg-rv4w" width="20%">{{$key->namabarang}}</td>
			    <td class="tg-rv4w" width="10%">{{$key->jumlah}}</td>
			  </tr>
			  @endforeach
			</table>
		</body>
	</head>
</html>


