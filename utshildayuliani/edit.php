<?php
error_reporting(0);
$con = new mysqli("localhost", "root", "", "pasien_hilda");

$tgl = date('d F Y');
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM tabel_pasien where id = '$id'");
$isi = $query->fetch_assoc();
if ($isi['jenis_pelayanan'] == 1) {
  $js = 'UMUM';
} else if ($isi['jenis_pelayanan'] == 2) {
  $js = 'BPJS';
} else if ($isi['jenis_pelayanan'] == 3) {
  $js = 'JAMKESMAS';
} else {
  $js = 'Jenis Pelayanan Tidak Terdaftar';
}

?>

<!DOCYTYPE html>
  <html>

  <head>
    <title>Update Pasien</title>
    <!-- <link rel="stylesheet" href="../asset/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>

 <body>
  <div class="container">
  <row>
    <div class="card">
    <H2 align="center">Edit Data Pasien</H2>
    <div class="card-body">
      <form class="row g-3" action="edit.php" method="post" name="form1">
        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $isi['id']?>" required>
        <div class="col-md-3">
          <label for="nomorpasien" class="form-label">Nomor Pasien</label>
          <input type="text" class="form-control" id="nomorpasien" name="nomorpasien" value="<?php echo $isi['nomor_pasien']?>" required>
        </div>

                <div class="col-md-9">
          <label for="jenispelayanan" class="form-label">Jenis Pelayanan</label>
          <select id="jenispelayanan" name="jenispelayanan" class="form-select" value="<?php echo $isi['jenis_pelayanan']?>" required> 
            <option selected value="<?php echo $isi['jenis_surat']?>" ><?php echo $js?>Silahkan Pilih..</option>
            <option value="1">UMUM</option>
            <option value="2">BPJS</option>
            <option value="3">JAMKESMAS</option>
          </select>
        </div>



        <div class="col-md-12">
          <label for="namapasien" class="form-label">Nama Pasien</label>
          <input type="text" class="form-control" id="namapasien" name="namapasien" value="<?php echo $isi['nama_pasien']?>" required>
        </div>

        <div class="col-12">
          <label for="tgllahir" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tgllahir" name="tgllahir" value="<?php echo $isi['tgl_lahir']?>" placeholder="mm/dd/yyyy" required>
        </div>

        <div class="col-md-6">
          <label for="umur" class="form-label">Umur</label>
          <input type="text" class="form-control" id="umur" name="umur" value="<?php echo $isi['umur']?>"required>
        </div>

        <div class="col-6">
          <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
          <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" value="<?php echo $isi['jenis_kelamin']?>"placeholder="" required>
        </div>

        <div class="col-md-6">
          <label for="diagnosapenyakit" class="form-label">Diagnosa Penyakit</label>
          <input type="text" class="form-control" id="diagnosapenyakit" name="diagnosapenyakit" value="<?php echo $isi['diagnosa_penyakit']?>" required>
        </div>

        <div class="col-md-6">
          <label for="namadokter" class="form-label">Nama Dokter</label>
          <input type="text" class="form-control" id="namadokter" name="namadokter" value="<?php echo $isi['nama_dokter']?>"required>
        </div>


        <!-- <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Nomor Surat</label>
          <input type="password" class="form-control" id="inputPassword4">
        </div> -->
        
        
        
        
        
        
        
        <div class="col-12">
          <button type="submit" class="btn btn-primary" name="update">Update</button>
          <button type="button" class="btn btn-danger">Batal</button>
        </div>
      </form>
    </div>
    </div> 
  </row>
  </div>
  <?php


    if(isset($_POST['update'])) {
      $no_pasien = $_POST['nomorpasien'];
      $nama_pasien = $_POST['namapasien'];
      $tgl_lahir = $_POST['tgllahir'];
      $jenis_kelamin = $_POST['jeniskelamin'];
      $umur = $_POST['umur'];
      $diagnosa_penyakit = $_POST['diagnosapenyakit'];
      $nama_dokter = $_POST['namadokter'];
      $jenis_pelayanan = $_POST['jenispelayanan'];

      //Insert user data info table
     $result = mysqli_query($con , "INSERT INTO tabel_pasien
        (id,nomor_pasien,nama_pasien,tgl_lahir,jenis_kelamin,umur,diagnosa_penyakit,nama_dokter,jenis_pelayanan) VALUES ('','$no_pasien','$nama_pasien','$tgl_lahir','$jenis_kelamin','$umur','$diagnosa_penyakit','$nama_dokter','$jenis_pelayanan')");

      //Show message when user added
      /*echo "Surat Updated Successfully. <a href='view.php'>List Surat</a>";*/
      
      header("Location:view.php?pesan=success&&frm=edit");
    }
  ?>
  </body>
  <!-- <script src="../asset/js/bootstrap.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </html>


