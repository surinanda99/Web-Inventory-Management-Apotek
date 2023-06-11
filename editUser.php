<?php 
include 'koneksi.php'; 
    if(isset($_GET['id'])){ 
        $kode = $_GET['id']; 
        $query="SELECT * FROM user WHERE id='$kode'"; 
        $sql=mysqli_query($conn, $query);
        while ($hasil = mysqli_fetch_array ($sql)){ 
            $username = $hasil['username']; 
            $nama = $hasil['nama']; 
            $alamat = $hasil['alamat']; 
            $email = $hasil['email']; 
            $telepon = $hasil['telepon']; 
            $password = $hasil['password']; 
            $jabatan = $hasil['jabatan']; 
        } 
    }else{ 
        die ("Error. NO Id Selected! "); 
    } 
    if(isset($_POST['sub'])){ 
        $username = htmlspecialchars($_POST['username']);
        $nama = htmlspecialchars($_POST['nama']);
        $alamat = htmlspecialchars($_POST['alamat']);    
        $email = htmlspecialchars($_POST['email']); 
        $telepon = htmlspecialchars($_POST['telepon']); 
        $password = htmlspecialchars($_POST['password']); 
        $encryptedpassword = password_hash($password, PASSWORD_DEFAULT); 
        $jabatan = htmlspecialchars($_POST['jabatan']); 
        $query = "UPDATE user SET username='$username',
                                nama='$nama',  
                                alamat='$alamat', 
                                email='$email', 
                                telepon='$telepon', 
                                password='$password', 
                                jabatan='$jabatan'
                                WHERE id='$kode'";
        $sql=mysqli_query($conn, $query); 
        if($sql){ 
            header("location:user.php"); 
            }else{
                header("location:user.php"); 
                } 
    } 
?> 
<html> 
    <head> 
        <title>Edit User</title> 
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
                <b>Edit Data User</b></h2> 
                <form action="" method="POST"> 
                    <div> 
                        <label for="username">Username: </label><br> 
                        <input type="text" name="username" readonly value="<?php echo $username;?>"><br> 
                    </div>
                    <div> 
                        <label for="password">Password:</label><br> 
                        <input type="password" name="password" value="<?php echo $password;?>"><br> 
                    </div>
                    <div> 
                        <label for="nama">Nama: </label><br> 
                        <input type="text" name="nama" readonly value="<?php echo $nama;?>"><br> 
                    </div> 
                    <div> 
                        <label for="alamat">Alamat: </label><br> 
                        <input type="alamat" name="alamat" value="<?php echo $alamat;?>"><br> 
                    </div>
                    <div> 
                        <label for="jabatan">Jabatan: </label><br> 
                        <input type="jabatan" name="jabatan" value="<?php echo $jabatan;?>"><br> 
                    </div>
                    <div> 
                        <label for="email">Email: </label><br> 
                        <input type="email" name="email" value="<?php echo $email;?>"><br> 
                    </div> 
                    <div> 
                        <label for="telepon">No HP: </label><br> 
                        <input type="text" name="telepon" value="<?php echo $telepon;?>"><br> 
                    </div>  
                    <div> 
                        <input type="submit" name="sub" value="Update" class="tombol"> 
                        <input type="submit" name="reset" value="Reset" class="tombol"> 
                    </div> 
                </form> 
            </div> 
        </center> 
    </body> 
</html>