<?php
$tgl = "date";
$kota = "Tasikmalaya";
$ttd = "Hilda Yuliani";
$Instansi = Array( 'LP3I', 'Kota Tasikmalaya', '(0265311766)');
$barang = Array( '', 'Proyektor', 'Camera', 'Komputer');
?>
<!DOCTYPE html>
<html>
<head>
    <table border="1">
        <tr>
            <td>

    <title>Surat - Hilda Yuliani</title>
</head>
<body>
    <?php
        echo "Surat Peminjaman";
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
        echo "Dengan adanya surat ini saya Hilda Yuliani meminta izin untuk meminjam :";
        for($x=0;$x<count($barang);$x++){
            echo "$x." .$barang[$x]."<br/>";
        }

        echo "Atas perhatiannya saya ucapkan terima kasih. ";
        echo "<br>";
        echo "<br>";
        echo "Tanda Tangan";
        echo "<br>";
        echo "<br>";
        echo "Hilda Yuliani";
    
    ?>
    </td>
    </tr>
    </table>
</body>
</html>