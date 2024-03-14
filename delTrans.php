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
    echo "New records failed"; ?>