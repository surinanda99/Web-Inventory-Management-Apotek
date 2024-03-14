<?php 
include "koneksi.php"; 
$id=$_GET['id']; 
$sql = "SELECT foto FROM obat WHERE id='$id'"; 
$hasil = $conn->query($sql); 
    while($row=$hasil->fetch_assoc()){ 
        $foto=$row['foto']; 
    } 
    if($foto != ""){ 
        unlink("img/".$foto); 
    } 
    $sql = "DELETE FROM obat WHERE id='$id'"; 
    if($conn->query($sql) === TRUE){
        header("location:dataObat.php"); 
    } 
    $conn->close(); 
    echo "New records failed"; ?>