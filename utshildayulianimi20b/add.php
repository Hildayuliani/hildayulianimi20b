<?php
error_reporting(0);
//Buat Koneksinya
$con = new mysqli("localhost","root", "","pasien_hilda");
$tgl = date ('d F Y');

$query = mysqli_query($con, "SELECT * FROM tabel_pasien");
/*$result = $con->query($sql);*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pasien</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	<row>
		<div class="card">
		<H2 align="center">Tambah Pasien</H2>
		<div class="card-body">
			<form class="row g-3" action="add.php" method="post" name="form1">
			  <div class="col-md-12">
			    <label for="noPasien" class="form-label">Nomor Pasien</label>
			    <input type="text" class="form-control"  name="nomor_pasien" placeholder="" required>
			  </div>
			  <div class="col-md-12">
			    <label for="noPasien" class="form-label">Nama Pasien</label>
			    <input type="text" class="form-control"  name="nama_pasien" placeholder="" required>
			  </div>
			<div class="col-12">
			    <label for="tglLahir" class="form-label">Tanggal Lahir</label>
			    <input type="date" class="form-control"  name="tgl_lahir" placeholder="mm/dd/yyyy" required>
			  </div>
			  <div class="col-12">
			    <label for="jk" class="form-label">Jenis Kelamin</label><br>
			    <label><input type="radio" name="jenis_kelamin" value="Laki-Laki" required>Laki-Laki</label>
			    <label><input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan</label>
			    <!-- <input type="text" class="form-control" id="jk" name="jk" placeholder="" required> -->
			  </div>
			  <div class="col-md-12">
			    <label for="umr" class="form-label">Umur</label>
			    <input type="text" class="form-control" id="umr" name="umur" required>
			  </div>
			  <div class="col-md-12">
			    <label for="diagnosa" class="form-label">Diagnosa Penyakit</label>
			    <input type="text" class="form-control" id="diganosa" name="diagnosa_penyakit" required>
			  </div>
			      <div class="col-md-12">
			    <label for="namaDokter" class="form-label">Nama Dokter</label>
			    <input type="text" class="form-control" id="namaDokter" name="nama_dokter" required>
			  </div>
			  <div class="col-md-12">
          <label for="jenisPelayanan" class="form-label">Jenis Pelayanan</label>
          <select id="jenisPelayanan" name="jenis_pelayanan" class="form-select" value="<?php echo $isi['jenis_pelayanan']?>" required> 
            <option selected value="<?php echo $isi['jenis_pelayanan']?>" ><?php echo $js?>Silahkan Pilih..</option>
            <option value="UMUM">UMUM</option>
            <option value="2">BPJS</option>
            <option value="3">JAMKESMAS</option>
          </select>
        </div>
			    <div class="col-12">
			    <button type="submit" class="btn btn-primary" name="simpan">Add</button>
			    <button type="button" class="btn btn-danger">Cancel</button>
			  </div>
			  </div>
			</form>
		</div>
	</div>
</row>


			      <?php
  		foreach ($query as $js) {
    	?>
    	<option value="<?=$js['jenis_pelayanan']?>"><?=$js['jenis_pelayan']?> </option>
    	<?php //QUERY DATA TABEL jenis_pelayanan
		}
    	?>
			    </select>
			 
			  
			</form>
		</div>
		</div>
	</row>
	</div>
	<?php


		if(isset($_POST['simpan'])) {
			$nomor_pasien = $_POST['nomor_pasien'];
			$nama_pasien = $_POST['nama_pasien'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$umur = $_POST['umur'];
			$diagnosa_penyakit = $_POST['diagnosa_penyakit'];
			$nama_dokter = $_POST['nama_dokter'];
			$jenis_pelayanan = $_POST['jenis_pelayanan'];

			//Insert user data info table
			$result = mysqli_query($con , "INSERT INTO tabel_pasien
				(id,nomor_pasien,nama_pasien,tgl_lahir,jenis_kelamin,umur,diagnosa_penyakit,nama_dokter,jenis_pelayanan) 
				VALUES ('','$nomor_pasien','$nama_pasien','$tgl_lahir','$jenis_kelamin','$umur','$diagnosa_penyakit','$nama_dokter','$jenis_pelayanan')");

			//Show message when user added
			/*echo "User added Successfully. <a href='view.php'>List Surat</a>";*/
			header("Location:view.php?pesan=success&&frm=add");
		}
	?>
</body>

<script src="../assets/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>