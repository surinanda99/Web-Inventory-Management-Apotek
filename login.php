<?php 
    include "konekLogin.php"; 
    session_start(); 
?> 
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Halaman Login</title> 
    </head> 
    <body>
        <div class="data"> 
            <form action="" method="POST"> 
        <div> 
            <label for="username">Username: </label><br> 
            <input type="username" name="username"><br> 
        </div> 
        <div> 
            <label for="password">Password:</label><br> 
            <input type="password" name="password"><br> 
        </div> 
        <div> 
            <label for="peran">Login Sebagai: </label><br> 
            <input type="text" name="peran" id="peran"> 
        </div> 
        <div> 
            <input type="submit" name="login" value="Login" class="tombol"> 
        </div> 
    </form> 
    <p>Belum memiliki akun? Silahkan <a href="register.php">Register</a></p> 
    <?php 
        if(isset($_POST['login'])){ 
            $username = htmlspecialchars($_POST['username']); 
            $password = htmlspecialchars($_POST['password']); 
            $login_status = $_POST['peran']; 
            
            $alldata = mysqli_query($conn, "SELECT * FROM user"); 
            $query = mysqli_query($conn, "SELECT username, peran from user WHERE username='$username' AND peran='$login_status'"); 
            $count = mysqli_num_rows($query);
            if($count > 0){ 
                //jika username ditemukan dan ada di database 
                $data = mysqli_fetch_array($query); 
                $data2 = mysqli_fetch_array($alldata); 
                //mengecek password sesuai atau tidak 
                if(password_verify($password, $data2['password'])){ 
                    //cek jika user login sebagai Admin 
                    if($data['peran']=="User"){ 
                        header("location:home.php"); 
                    }else{ 
                        echo "your password invalid"; 
                    } 
                } 
            }else{ 
                echo "your account not exist <a href=register.php>klik untuk registrasi</a>"; 
            } 
        } 
    ?> 
    </div> 
    </body> 
</html>