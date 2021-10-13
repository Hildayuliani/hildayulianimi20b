<?php
error_reporting(0);
//Buat Koneksinya
$con = new mysqli("localhost","root", "","db_surathilda");
$tgl = date ('d F Y');

$sql = "SELECT * FROM tbl_surat";
$result = $con->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>View Surat</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
	<!-- <div class="container">
	<h1><center>LIST SURAT</center></h1>
	<table class="table text-center">
		<thead class="table-dark table-striped">
			<td>Nama</td>
			<td>Alamat</td>
			<td>No Telp</td>
		</thead>
		<tbody>
			<tr class="table-active">
				<td>Hilda Yuliani</td>
				<td>Ciamis</td>
				<td>085321412713</td>
			</tr>
			<tr>
				<td>Dinda Rachmayanti</td>
				<td>Tasikmalaya</td>
				<td>087725463120</td>
			</tr>
			<tr class="table-active">
				<td>Adinda Nur Aulia Rizki</td>
				<td>Tasikmalaya</td>
				<td>081322444989</td>
			</tr>
			<tr>
				<td>Fanny Fietya Herlambang</td>
				<td>Tasikmalaya</td>
				<td>083123321456</td>
			</tr>
			<tr class="table-active">
				<td>Siti Aas Latifah</td>
				<td>Garut</td>
				<td>087725321123</td>
			</tr>
			<tr>
				<td>Depa Melina</td>
				<td>Tasikmalaya</td>
				<td>085321412713</td>
			</tr>
		</tbody>
	</table></div> -->
	<h1><center>Jenis Surat</center></h1>

	<table class="table">
		<thead>
			<tr>
				<th>No Surat</th>
				<th>
					Jenis Surat
				</th>
				<th>
					Tanggal Surat
				</th>
				<th>
					TTD Surat
				</th>
			</tr>
		</thead>
<?php
/*$query=mysqli_query($sql,"SELECT * FROM tbl_surat");*/
	foreach ($result as $isi){
		if ($isi["jenis_surat"]=='1'){
			$js = "Surat Keputusan";
		}
		else if($isi["jenis_surat"]=='2'){
			$js = "Surat Pernyataan";
		}else if ($isi["jenis_surat"]=='3'){
			$js = "Surat Peminjaman";
		}else{
			$js = "Kode Bermasalah";
		}
		?>
	<tr>
		<td><?php echo $isi['no_surat'];?></td>
		<td><?php echo $js;?></td>
		<td><?php echo $isi['tgl_surat'];?></td>
		<td><?php echo $isi['ttd_surat'];?></td>
	</tr>
	<?php
	}
?>

</body>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>

