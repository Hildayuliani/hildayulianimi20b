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
	<title>Tambah Surat</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	<row>
		<div class="card">
		<H2 align="center">Tambah Surat</H2>
		<div class="card-body">
			<form class="row g-3">
			  <div class="col-md-6">
			    <label for="noSurat" class="form-label">Nomor Surat</label>
			    <input type="email" class="form-control" id="noSurat">
			  </div>
			  <div class="col-md-6">
			    <label for="jenisSurat" class="form-label">Jenis Surat</label>
			    <select id="jenisSurat" class="form-select">
			      <option selected>Silahkan Pilih...</option>
			      <option>Surat Keputusan</option>
			      <option>Surat Pernyataan</option>
			      <option>Surat Peminjaman</option>
			    </select>
			  </div>
			  <!-- <div class="col-md-6">
			    <label for="inputPassword4" class="form-label">Nomor Surat</label>
			    <input type="password" class="form-control" id="inputPassword4">
			  </div> -->
			  <div class="col-12">
			    <label for="tglSurat" class="form-label">Tanggal Surat</label>
			    <input type="text" class="form-control" id="tglSurat" placeholder="mm/dd/yyyy">
			  </div>
			  <div class="col-12">
			    <label for="ttdSurat" class="form-label">Pembuat Surat</label>
			    <input type="text" class="form-control" id="ttdSurat" placeholder="">
			  </div>
			  <div class="col-md-6">
			    <label for="ttdMengetahui" class="form-label">Mengetahui</label>
			    <input type="text" class="form-control" id="ttdMengetahui">
			  </div>
			  
			  <div class="col-md-6">
			    <label for="ttdMenyetujui" class="form-label">Menyetujui</label>
			    <input type="text" class="form-control" id="ttdMenyetujui">
			  </div>
			  <!-- <div class="col-12">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" id="gridCheck">
			      <label class="form-check-label" for="gridCheck">
			        Check me out
			      </label>
			    </div>
			  </div> -->
			  <div class="col-12">
			    <button type="submit" class="btn btn-primary">Add</button>
			    <button type="submit" class="btn btn-danger">Cancel</button>
			  </div>
			</form>
		</div>
		</div>
	</row>
	</div>
	<?php


		if(isset($_POST['submit'])) {
			$no_surat = $_POST['noSurat'];
			$jenis_surat = $_POST['jenisSurat'];
			$tgl_surat = $_POST['tglSurat'];
			$ttd_surat = $_POST['ttdSurat'];
			$ttd_mengetahui = $_POST['ttdMengetahui'];
			$ttd_menyetujui = $_POST['ttdMenyetujui'];

			//Insert user data info table
			$result = mysqli_query($mysqli, "INSERT INTO tbl_surat
				(id,no_surat,jenis_surat,ttd_surat,ttd_mengetahui,ttd_menyetujui) VALUES('',$no_surat','$jenis_surat','$tgl_surat','$ttd_mengetahui','$ttd_menyetujui')");

			//Show message when user added
			echo "User added Successfully. <a href='view.php'>List Surat</a>";
		}
	?>
</body>
<script src="../assets/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>

