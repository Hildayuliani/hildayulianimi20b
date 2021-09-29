<?php
error_reporting(0);
$username = 'root';
$password = '';
$database = 'db_surathilda';

$con = new mysqli('localhost', $username, $password, $database);

if ($con->connect_error) {
    die('Connection Failed');
}

$sql = "SELECT * FROM tbl_surat";
$result = $con->query($sql);
$data = $result->fetch_assoc();

$js = '';

if ($data['jenis_surat'] == 1) {
    $js = 'SURAT KEPUTUSAN';
} else if ($data['jenis_surat'] == 2) {
    $js = 'SURAT PERNYATAAN';
} else if ($data['jenis_surat'] == 3) {
    $js = 'SURAT PEMINJAMAN';
} else {
    die('Jenis Surat Tidak Terdaftar');
}

$surat = array(
    'date'          => $data['tgl_surat'],
    'nomor'         => $data['no_surat'],
    'kepada'        => $data['ttd_surat'],
    'kota'          => 'Tasikmalaya',
    'instansi'      => array('LP3I, ', 'Kota Tasikmalaya, ', '081297551925'),
    'barang'        => array('Kamera', 'Komputer'),
    'ttd'           => $data['ttd_menyetujui'],
    'js'            => $js,
);

$tgl = "date";
$kota = "Tasikmalaya";
$ttd = "Hilda Yuliani";
$Instansi = Array( 'LP3I', 'Kota Tasikmalaya', '(0265311766)');
$barang = Array( '', 'Proyektor', 'Camera', 'Komputer', 'Processor');

   /* echo $isi["no_surat"];
    echo "<br>";
    echo "<br>";
        echo $isi2["no_surat"];*/

?>
<?php
<DOCTYPE html>
<html>
<head>
    <title>Surat - Hilda Yuliani</title>
</head>
<body>
<table border="3">
        <tr> 
            <td>
echo "<h2><center>".$js."</h2></center>"
        echo "<br>";
        echo "<center>" ."Jenis Surat" ."</center>";
        echo "<br>";
        echo $kota;
        echo ", ";
        echo date('d F Y');
        echo "<br/>";
        echo "<br/>";
        echo "Nomor : 01";
        echo "<br>";
        echo "Perihal : -";
        echo "<br>";
        echo "Kepada : ";
        echo "<br>";
        for($x=0;$x<count($Instansi);$x++){
        echo $Instansi[$x]."<br/>";
        }
        echo "<br>";
        echo "Dengan adanya surat ini saya Hilda Yuliani meminta izin untuk meminjam : ";
        echo "<br>";
        for($x=1;$x<count($barang);$x++){
            echo "$x." .$barang[$x]."<br/>";
            
        }
        echo "Atas perhatiannya saya ucapkan terima kasih. ";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "Tanda Tangan";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "Hilda Yuliani";
        echo "<br>";
        echo "<br>";
         ?>

    </td>
    </tr>
    </table>
</body>
</html>
   



