<?php 
$nama = "Hilda Yuliani";
$kelas = "Manajemen Informatika 20 B";
$alamat = "Dsn. Pamokolan Kec. Cihaurbeuti - Ciamis";
$Nohp = "085705935081";
?>
<!DOCTYPE html>
<html>
<head>
    <title>WEEK 2 - Hilda Yuliani</title>
</head>
<body>
    <?php
        echo "~~~~~BIODATA~~~~~";
        echo "<br>"; //Untuk memberikan spasi
        echo "<br>";
        echo "Nama : " .$nama;
        echo "<br>";
        echo "Kelas : " .$kelas;
        echo "<br>";
        echo "Alamat : " .$alamat;
        echo "<br>";
        echo "No HP : " .$Nohp;
        echo "<br>";
        echo "Saya Mengambil Mata Kuliah :";
        echo "<br>"; 
        $matakuliah = array('', 'Web Programming','Java Programming','Mobile Programming 1','Network Operating System');
        for($x=1;$x<count($matakuliah);$x++){
        echo "$x." .$matakuliah[$x]."<br/>";
        }
    ?>
</body>
</html>