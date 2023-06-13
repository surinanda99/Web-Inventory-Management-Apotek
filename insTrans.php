<?php
    include "koneksi.php";
    include "upBukti.php";

    $id = $_POST['tid'];
    $namabrg = $_POST['tnama'];
    $jml = $_POST['tjml'];
    $tglTransaksi = $_POST['ttgl'];
    $totHarga = $_POST['thrg'];
    $Keterangan = $_POST['tket'];

    if (upload_foto($_FILES["bukti"])) {
        $bukti = $_FILES["bukti"]["name"];
        $sql = "INSERT INTO transaksi (id, namabrg, jml, tglTransaksi, totHarga, Keterangan, bukti) VALUES 
        ('$id', '$namabrg', '$jml', '$tglTransaksi', '$totHarga', '$Keterangan', '$bukti')";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("Location: dataTrans.php");
            exit();
        } else {
            $conn->close();
            echo "New records failed";
        }
    } else {
        echo "Sorry, there was an error uploading your file";
    }
?>
