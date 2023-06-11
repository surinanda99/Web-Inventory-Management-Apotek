<?php 
    include "koneksi.php"; 
    include "upFotoObat.php"; 
    $id=$_POST['tid']; 
    $namaObat=$_POST['tnama']; 
    $harga=$_POST['thrg']; 
    $expired=$_POST['dexp'];
    $stok=$_POST['tjml'];     
    $foto_lama=$_POST['foto_lama']; 
    $qry=true; 
    $flagphoto=true; 
    if(isset($_POST['ubah_foto'])){ 
        if(upload_foto($_FILES['foto'])){ 
            $foto=$_FILES['foto']['name']; 
            $sql = "UPDATE obat SET namaObat='$namaObat', 
                                    harga='$harga', 
                                    stok='$stok', 
                                    foto='$foto' WHERE id='$id'"; 
        }else{ 
            $qry=false; 
            echo "foto gagal di upload"; 
        } 
    }else{ 
        $sql = "UPDATE obat SET namaObat='$namaObat', 
                                harga='$harga', 
                                stok='$stok', 
                                keterangan='$ket' WHERE id='$id'"; 
        $flagphoto=false; 
    } 
    if($qry==true){ 
        if($conn->query($sql)===TRUE){ 
            if(is_file("img/".$foto_lama) && ($flagphoto==TRUE)){ 
                //jika jambar ada 
                unlink("img/".$foto_lama); 
                $conn->close(); header("location:Halaman1.php"); 
            }else{ 
                $conn->close(); 
                header("location:Halaman1.php"); 
            } 
        } 
    } 
?>