<?php 
    echo "<br><br><br>"; 
    include 'konekLogin.php'; 
    if(isset($_POST['sub'])){ 
        $username = htmlspecialchars($_POST['nama']); 
        $email = htmlspecialchars($_POST['email']); 
        $telepon = htmlspecialchars($_POST['telepon']); 
        $password = htmlspecialchars($_POST['password']); 
        $encryptedpassword = password_hash($password, PASSWORD_DEFAULT); 
        $login_status = htmlspecialchars($_POST['peran']); 
        $queryinsert = mysqli_query($conn, "INSERT INTO user (nama_user, email, telepon, password, peran) 
                                            VALUES ('$username', '$email', '$telepon', '$encryptedpassword', '$login_status')"); 
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
        <title>Tambah Barang</title> 
    </head>
    <body>
        <div class="topnav"> 
            <b><a href="home.php">Home</a></b> 
            <b><a href="login1.php">Login</a></b> 
            <b><a href="logout.php">Logout</a></b> 
        </div> 
        <center> 
            <div class="panjang"> 
                <h2 align="left" style="margin-bottom:30px">
                    <b>Input user</b>
                </h2>form action="" method="POST"> 
                <div> 
                    <label for="nama">Username: </label><br> 
                    <input type="text" name="nama"><br> 
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
                    <label for="password">Password:</label><br> 
                    <input type="password" name="password"><br> 
                </div> 
                <div> 
                    <label for="Peran">Input: </label><br> 
                    <input type="text" name="peran" id="peran"> 
                </div> 
                <div> 
                    <input type="submit" name="sub" value="Register" class="tombol"> 
                </div> 
            </form> 
        </div> 
        </center> 
    </body> 
</html>