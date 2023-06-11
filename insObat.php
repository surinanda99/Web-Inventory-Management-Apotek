<?php 
    include "koneksi.php"; 
    include "upFotoObat.php"; 
        $id=$_POST['tid']; 
        $nama=$_POST['tnama']; 
        $hrg=$_POST['thrg']; 
        $jml=$_POST['tjml']; 
    if(upload_foto($_FILES["foto"])){ 
        $foto=$_FILES["foto"]["name"]; 
        $sql = "INSERT INTO obat (id,nama,hrg,jml,foto) VALUES ('$id','$nama','$hrg','$jml', '$foto')"; 
        if($conn->query($sql) === TRUE){ 
            $conn->close(); header("location:dataObat.php"); 
        }else{ 
            $conn->close(); echo "New records failed"; 
        }
    }else{ 
        echo "Sorry, there was an error uploading your file"; 
    } 
?>