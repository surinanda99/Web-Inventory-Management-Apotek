<?php 
    include 'konekLogin.php'; 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Halaman Register</title> 
</head> 
<body>
    <center> 
        <h2>==== Registrasi ====</h2> 
        <p>Halo, Silahkan Registrasi di Sini</p> 
    </center> 
    <div class="data"> 
        <form action="" method="POST"> 
            <div> 
                <label for="nama">Nama Lengkap: </label><br> 
                <input type="text" name="nama"><br>
            </div>
            <div> 
                <label for="alamat">Alamat: </label><br> 
                <input type="text" name="alamat"><br> 
            </div>
            <div> 
                <label for="email">Email: </label><br> 
                <input type="email" name="email"><br> 
            </div> 
            <div> 
                <label for="telepon">Telepon: </label><br> 
                <input type="text" name="telepon"><br> 
            </div> 
            <div> 
                <label for="username">Username: </label><br> 
                <input type="text" name="username"><br>
            </div>
            <div> 
                <label for="password">Password:</label><br> 
                <input type="password" name="password"><br> 
            </div> 
            <div> 
                <label for="jabatan">Jabatan: </label><br> 
                <input type="text" name="jabatan" id="jabatan"> 
            </div> 
            <div> 
                <input type="submit" name="register" value="Register" class="tombol"> 
            </div> 
        </form> 
        <?php 
            if(isset($_POST['register'])){ 
                $name = htmlspecialchars($_POST['nama']);
                $alamat = htmlspecialchars($_POST['alamat']);  
                $email = htmlspecialchars($_POST['email']); 
                $telepon = htmlspecialchars($_POST['telepon']); 
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']); 
                $encryptedpassword = password_hash($password, PASSWORD_DEFAULT);
                $login_status = htmlspecialchars($_POST['jabatan']); 
                
                //mengecek ada username yang sama atau tidak 
                $query = mysqli_query($conn, "SELECT username from user WHERE username='$username'"); 
                $count = mysqli_num_rows($query); 
                
                if($count > 0){ 
                    echo "Tidak bisa melakukan registrasi karena username ini sudah terdaftar, silahkan <a href=login1.php>Login</a>"; 
                }else{
                    $queryinsert = mysqli_query($conn, "INSERT INTO user (nama, alamat, email, telepon, username, password, jabatan) 
                    VALUES ('$name', '$alamat', '$email', '$telepon', '$username', '$encryptedpassword', '$login_status')"); 
                    if($queryinsert){ 
                        echo "Anda Sudah Register, Silahkan <a href=login1.php>Login</a>"; 
                    } 
                } 
            } 
        ?> 
        </div> 
</body> 
</html>