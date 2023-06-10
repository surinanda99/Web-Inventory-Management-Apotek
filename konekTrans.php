<?php 
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbtransaksi = "apt_transaksi"; 
    
    $conn = new mysqli($servername, $username, $password, $dbtransaksi); 
    if($conn->connect_error){ 
        die ("Connection failed: ".$conn->connect_error); 
    } 
?>