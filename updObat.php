<?php 
    include "konekObat.php"; 
    include "upFotoObat.php"; 
    $id=$_POST['tid'];
    $nama=$_POST['tnama']; 
    $hrg=$_POST['thrg']; 
    $ket=$_POST['tket'];
    $jml=$_POST['tjml']; 
    $foto_lama=$_POST['foto_lama']; 
    $qry=true; 
    $flagphoto=true; 
    if(isset($_POST['ubah_foto'])){ 
        if(upload_foto($_FILES['foto'])){ 
            $foto=$_FILES['foto']['name']; 
            $sql = "UPDATE obat SET nama='$nama', 
                                    hrg='$hrg', 
                                    jml='$jml', 
                                    keterangan='$ket', 
                                    foto='$foto' WHERE id='$id'"; 
        }else{ 
            $qry=false; 
            echo "foto gagal di upload"; 
        } 
    }else{ 
        $sql = "UPDATE obat SET nama='$nama', 
                                hrg='$hrg', 
                                jml='$jml', 
                                keterangan='$ket' WHERE id='$id'"; 
        $flagphoto=false; 
    } 
    if($qry==true){ 
        if($conn->query($sql)===TRUE){ 
            if(is_file("img1/".$foto_lama) && ($flagphoto==TRUE)){ 
                //jika jambar ada 
                unlink("img1/".$foto_lama); 
                $conn->close(); header("location:Halaman1.php"); 
            }else{ 
                $conn->close(); 
                header("location:Halaman1.php"); 
            } 
        } 
    } 
?>