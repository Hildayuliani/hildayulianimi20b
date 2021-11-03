<?php
error_reporting(0);
//Buat Koneksinya
$con = new mysqli("localhost","root", "","pasien_hilda");
$tgl = date ('d F Y');

$sql = "SELECT * FROM tabel_pasien";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<body>
  <title>DATA PASIEN</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<div class="container">
    <?php //ALLERT SETTING AKHIR
    $pesan = $_GET['pesan'];
    $frm = $_GET['frm'];
    
    if ($pesan=='success' && $frm =='del') {
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Berhasil!!</strong> Anda Berhasil menghapus.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
} else if($pesan=='success' && $frm =='add') {
?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Berhasil!</strong> Selamat anda berhasil menambahkan.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
} else if($pesan=='success' && $frm =='edit') {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Berhasil!</strong> Selamat anda berhasil merubah Data.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
 }
 ?>

<h1><center><b>DATA PASIEN RAWAT JALAN</b></center></h1>

  <table class="table table-bordered table-striped">
    <thead class="table-dark text-center">
      <tr>
        <th>Nomor Pasien</th>
        <th>Nama Pasien</th> 
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Umur</th>
        <th>Diagnosa Penyakit</th>
        <th>Nama Dokter</th>
        <th>Jenis Pelayanan</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
<?php

  foreach ($result as $isi){
   if ($isi["jenis_pelayanan"] == 1){
      $jp = "UMUM";
    } else if($isi["jenis_pelayanan"] == 2){
      $jp = "BPJS";
    } else if ($isi["jenis_pelayanan"] == 3){
      $jp = "JAMKESMAS";
    }else {
      $jp = "Kode Bermasalah";
    }
?>
<tr>
    <td><?php echo $isi['nomor_pasien'];?></td>
    <td><?php echo $isi['nama_pasien'];?></td>
    <td><?php echo $isi['tgl_lahir'];?></td>
    <td><?php echo $isi['jenis_kelamin'];?></td>
    <td><?php echo $isi['umur'];?></td>
    <td><?php echo $isi['diagnosa_penyakit'];?></td>
    <td><?php echo $isi['nama_dokter'];?></td>
    <td><?= $jp ?></td>
    <td><center><a class="btn bg-warning btn-sm" href ="edit.php?id=<?php echo $isi['id'];?>">Edit</a></button></center></td>
    <td><center><button class="btn btn-success btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#deletesurat<?php echo $isi ['id'];?>">Delete</a></button></center></td>

  
  </tr>

  <div class="example-modal">
    <div id="deletesurat<?php echo $isi ['id'];?>" class="modal fade" role="dialog" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class ="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title">Konfirmasi Delete Data Surat</h3>
          </div>
          <form class="row g-3" action="delete.php" method="post" name="form1">
          <div class="modal-body">
              <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $isi ['id'];?>" required>
            <h4 align="center">Apakah Anda Yakin Ingin Menghapus No Surat? <?php echo $isi ['no_surat'];?><strong><span class="grt"></span></strong></h4>
          </div>
          <div class="modal-footer">
           <button id="nodelete" type="button" class="btn btn-primary pull-left" data-bs-dismiss="modal">Cancel</button> 
           <button type="submit" class="btn btn-danger" name="delete">Delete</button>
          </div>
          </form>
          </div>
        </div>
      </div>
     </div>



<?php } 
?>

<p><a href="add.php">Tambah Pasien</a></p>
</div>
</table>
</body>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>