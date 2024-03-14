<?php 
    include "koneksi.php"; 
    include "upFotoObat.php"; 
        $id=$_POST['tid']; 
        $namaObat=$_POST['tnama']; 
        $harga=$_POST['thrg'];
        $expired=$_POST['dexp'];
        $stok=$_POST['tjml']; 
    if(upload_foto($_FILES["foto"])){ 
        $foto=$_FILES["foto"]["name"]; 
        $sql = "INSERT INTO obat (id, namaObat, harga, expired, stok, foto) VALUES ('$id','$namaObat','$harga','$expired','$stok', '$foto')"; 
        if($conn->query($sql) === TRUE){ 
            $conn->close(); 
            header("location:dataObat.php"); 
        }else{ 
            $conn->close(); 
            echo "New records failed"; 
        }
    }else{ 
        echo "Sorry, there was an error uploading your file"; 
    } 
?>