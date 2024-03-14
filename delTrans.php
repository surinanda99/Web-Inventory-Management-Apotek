<<<<<<< HEAD
<?php 
include "koneksi.php"; 
$id=$_GET['id']; 
$sql = "SELECT namabrg FROM transaksi WHERE id='$id'"; 
$hasil = $conn->query($sql); 
    while($row=$hasil->fetch_assoc()){ 
        $bukti=$row['bukti']; 
    } 
    if($bukti != ""){ 
        unlink("img/".$bukti); 
    } 
    $sql = "DELETE FROM transaksi WHERE id='$id'"; 
    if($conn->query($sql) === TRUE){
        header("location:dataTrans.php"); 
    } 
    $conn->close(); 
=======
<?php 
include "koneksi.php"; 
$id=$_GET['id']; 
$sql = "SELECT namabrg FROM transaksi WHERE id='$id'"; 
$hasil = $conn->query($sql); 
    while($row=$hasil->fetch_assoc()){ 
        $bukti=$row['bukti']; 
    } 
    if($bukti != ""){ 
        unlink("img/".$bukti); 
    } 
    $sql = "DELETE FROM transaksi WHERE id='$id'"; 
    if($conn->query($sql) === TRUE){
        header("location:dataTrans.php"); 
    } 
    $conn->close(); 
>>>>>>> 5139516e321c3d808fa9ee24ecd17437e5ee388b
    echo "New records failed"; ?>