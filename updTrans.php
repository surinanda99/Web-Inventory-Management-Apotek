<<<<<<< HEAD
<?php 
    include "koneksi.php"; 
    include "upBukti.php"; 
    $id=$_POST['tid']; 
    $namabrg=$_POST['tnama']; 
    $jml=$_POST['tjml']; 
    $tglTransaksi=$_POST['ttgl'];
    $totHarga=$_POST['thrg']; 
    $Keterangan=$_POST['tket'];    
    $foto_lama=$_POST['foto_lama']; 
    $qry=true; 
    $flagphoto=true; 
    if(isset($_POST['ubah_foto'])){ 
        if(upload_foto($_FILES['bukti'])){ 
            $bukti=$_FILES['bukti']['name']; 
            $sql = "UPDATE transaksi SET namabrg='$namabrg', 
                                    jml='$jml', 
                                    tglTransaksi='$tglTransaksi',
                                    totHarga='$totHarga',
                                    Keterangan='$Keterangan', 
                                    bukti='$bukti' WHERE id='$id'"; 
        }else{ 
            $qry=false; 
            echo "foto gagal di upload"; 
        } 
    }else{ 
        $sql = "UPDATE transaksi SET namabrg='$namabrg', 
                                jml='$jml', 
                                tglTransaksi='$tglTransaksi',
                                totHarga='$totHarga',
                                Keterangan='$Keterangan'";
        $flagphoto=false; 
    } 
    if($qry==true){ 
        if($conn->query($sql)===TRUE){ 
            if(is_file("img/".$foto_lama) && ($flagphoto==TRUE)){ 
                //jika jambar ada 
                unlink("img/".$foto_lama); 
                $conn->close(); header("location:dataTrans.php"); 
            }else{ 
                $conn->close(); 
                header("location:dataTrans.php"); 
            } 
        } 
    } 
=======
<?php 
    include "koneksi.php"; 
    include "upBukti.php"; 
    $id=$_POST['tid']; 
    $namabrg=$_POST['tnama']; 
    $jml=$_POST['tjml']; 
    $tglTransaksi=$_POST['ttgl'];
    $totHarga=$_POST['thrg']; 
    $Keterangan=$_POST['tket'];    
    $foto_lama=$_POST['foto_lama']; 
    $qry=true; 
    $flagphoto=true; 
    if(isset($_POST['ubah_foto'])){ 
        if(upload_foto($_FILES['bukti'])){ 
            $bukti=$_FILES['bukti']['name']; 
            $sql = "UPDATE transaksi SET namabrg='$namabrg', 
                                    jml='$jml', 
                                    tglTransaksi='$tglTransaksi',
                                    totHarga='$totHarga',
                                    Keterangan='$Keterangan', 
                                    bukti='$bukti' WHERE id='$id'"; 
        }else{ 
            $qry=false; 
            echo "foto gagal di upload"; 
        } 
    }else{ 
        $sql = "UPDATE transaksi SET namabrg='$namabrg', 
                                jml='$jml', 
                                tglTransaksi='$tglTransaksi',
                                totHarga='$totHarga',
                                Keterangan='$Keterangan'";
        $flagphoto=false; 
    } 
    if($qry==true){ 
        if($conn->query($sql)===TRUE){ 
            if(is_file("img/".$foto_lama) && ($flagphoto==TRUE)){ 
                //jika jambar ada 
                unlink("img/".$foto_lama); 
                $conn->close(); header("location:dataTrans.php"); 
            }else{ 
                $conn->close(); 
                header("location:dataTrans.php"); 
            } 
        } 
    } 
>>>>>>> 5139516e321c3d808fa9ee24ecd17437e5ee388b
?>