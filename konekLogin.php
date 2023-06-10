<?php 
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dblogin = "apt_login"; 
    // Create connection 
    $conn = mysqli_connect($servername, $username, $password, $dblogin); 
    // Check connection 
    if (!$conn) { 
        die("Failed to connect to MySQL: " . mysqli_connect_error()); 
    } 
?>