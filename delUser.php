<?php 
include "koneksi.php"; 
$id=$_GET['id']; 
$sql = "DELETE FROM user WHERE id='$id'"; 
    if($conn->query($sql) === TRUE){
        header("location:dataUser.php"); 
    } 
<<<<<<< HEAD
    $conn->close(); 
    echo "New records failed"; ?>
=======
?> 
<html>
    <head>
        <title>Delete Barang</title> 
    </head>
    <body>
        <div class="topnav"> 
            <b><a href="home.php">Home</a></b> 
            <b><a href="dataUSer.php">User</a></b>
            <b><a href="dataObat.php">Obat</a></b>
            <b><a href="dataTrans.php">Transaksi</a></b> 
            <b><a href="logout.php">Logout</a></b> 
        </div> 
        <?php 
        if (!empty($kode) && $kode != "") { 
            $query = "DELETE FROM user WHERE id='$kode'"; 
            $sql = mysqli_query ($conn,$query); 
            if ($sql) { 
                echo "<h2><font color=blue>Data telah berhasil dihapus</font></h2>"; 
            }else{ 
                echo "<h2><font color=red>Data gagal dihapus</font></h2>"; 
            }
            echo "Klik <a href='dataUser.php'>disini</a> untuk kembali ke halaman display user";
        }else{
            die ("Access Denied"); 
        } ?> 
    </body> 
</html>
>>>>>>> 5139516e321c3d808fa9ee24ecd17437e5ee388b
