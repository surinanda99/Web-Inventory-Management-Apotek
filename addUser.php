<?php 
    echo "<br><br><br>"; 
    include 'koneksi.php'; 
    if(isset($_POST['sub'])){ 
        $nama = htmlspecialchars($_POST['nama']); 
        $username = htmlspecialchars($_POST['username']); 
        $email = htmlspecialchars($_POST['email']);
        $alamat = htmlspecialchars($_POST['alamat']);  
        $telepon = htmlspecialchars($_POST['telepon']); 
        $password = htmlspecialchars($_POST['password']); 
        $encryptedpassword = password_hash($password, PASSWORD_DEFAULT); 
        $jabatan = htmlspecialchars($_POST['jabatan']); 
        $queryinsert = mysqli_query($conn, "INSERT INTO user (nama, alamat, email, telepon, username, password, jabatan) VALUES ('$nama', '$alamat', '$email', '$telepon', '$username', '$encryptedpassword', '$jabatan')"); 
        $sql=mysqli_query($conn, $queryinsert); 
        if($sql){
            header("location:user.php"); 
        }else{ 
            header("location:user.php"); 
        } 
    } 
?> 
<html> 
    <head>
        <title>Tambah User</title> 
    </head>
    <body>
        <div class="topnav"> 
            <b><a href="home.php">Home</a></b> 
            <b><a href="dataUSer.php">User</a></b>
            <b><a href="dataObat.php">Obat</a></b>
            <b><a href="dataTrans.php">Transaksi</a></b> 
            <b><a href="logout.php">Logout</a></b> 
        </div> 
        <center> 
            <div class="panjang"> 
                <h2 align="left" style="margin-bottom:30px">
                    <b>Input user</b>
                </h2> <form action="" method="POST"> 
                <div> 
                    <label for="username">Username: </label><br> 
                    <input type="text" name="username"><br> 
                </div>
                <div> 
                    <label for="password">Password:</label><br> 
                    <input type="password" name="password"><br> 
                </div> 
                <div> 
                    <label for="nama">Nama: </label><br> 
                    <input type="text" name="nama"><br> 
                </div>
                <div> 
                    <label for="alamat">Alamat: </label><br> 
                    <input type="text" name="alamat"><br> 
                </div>
                <div> 
                    <label for="jabatan">Jabatan: </label><br> 
                    <input type="text" name="jabatan" id="jabatan"> 
                </div>  
                <div> 
                    <label for="email">Email: </label><br> 
                    <input type="email" name="email"><br> 
                </div>
                
                <div> 
                    <label for="telepon">No hp: </label><br> 
                    <input type="text" name="telepon"><br> 
                </div>  
                <div> 
                    <input type="submit" name="sub" value="Register" class="tombol"> 
                </div> 
            </form> 
        </div> 
        </center> 
    </body> 
</html>