<div class="row">
<div class="col-md-6">
<h3>Berikut adalah hasil konsultasi</h3>
<table class="table table-condensed table-bordered table-hover table-striped" style="color:#000000">
	<tr>
		<td>User</td>
		<td><?= $user ;?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><?= $nama; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><?= $alamat; ?></td>
	</tr>
	<tr>
		<td>Telp</td>
		<td><?= $telp; ?></td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td><?= $pekerjaan; ?></td>
	</tr>
</table>
</div>

<div class="col-md-12" style="color:#000000">

		
				<table class="table table-condensed table-bordered table-hover table-striped">
					<tr>
						<td>Tanggal konsultasi</td>
						<td><?= $model->tgl ;?></td>
					</tr>
					<tr>
						<td>Jenis</td>
						<td><?= $model->jenis ; ?></td>
					</tr>
					<tr>
						<td>Ciri-ciri</td>
						<td><?php

						 $ciri=explode("|",  $model->ciri);
                         echo "Warna : ".$ciri[0]."<br>";
                         echo "Rasa : ".$ciri[1]."<br>";
                         echo "Bentuk : ".$ciri[2]."<br>";


						  ; ?></td>
					</tr>
					<tr>
						<td>Hasil</td>
						<td><b><?= $model->hasil; ?></b></td>
					</tr>
					<tr>
						<td>Kandungan</td>
						<td><?= $hasil= str_replace(",", "<br>", $model->kandungan) ; ?></td>
					</tr>

<?php
if(substr($model->hasil,0,3)=="KW3"){
?>
<tr>
						<td>Solusi</td>
						<td>Dilakukan revinasi atau daur ulang dengan cara direbus dengan air panas atau dilarutkan dengan air, kemudian busa yang mengambang dibuang dan dilakukan proses kristalisasi kembali</td>
					</tr>

<?php
}
?>

					
				</table>
				



</div>


</div>
