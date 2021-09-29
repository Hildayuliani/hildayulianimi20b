<?php
error_reporting(1);
 
//DATABASE PERTAMA
$db_host1 = 'localhost';
$db_user1 = 'root';
$db_pass1 = '';
$database1 = 'db_surathilda';
 
// Buat Koneksinya
$db1 = new mysqli($db_host1, $db_user1, $db_pass1, $database1);
 
// Cek koneksi *BISA SOBAT HAPUS NANTINYA 
if ($db1->connect_error) { 
	die("<b>Yahh! Koneksi Database pertama 'db_surathilda' gagal</b> : " . mysqli_connect_error()); 
} else { 
	echo "<b>Hore! Koneksi Database pertama 'db_surathilda' Berhasil</b>"; 
}
// ------------------------------------------------------------------------------- \\
 
