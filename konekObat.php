<?php 
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbobat = "apt_obat"; 
    
    $conn = new mysqli($servername, $username, $password, $dbobat); 
    if($conn->connect_error){ 
        die ("Connection failed: ".$conn->connect_error); 
    } 
?>