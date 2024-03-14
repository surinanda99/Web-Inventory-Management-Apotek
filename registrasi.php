<?php 
    include "koneksi.php"; 
    session_start(); 
?> 
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <?php include 'header.php'?>
    </head> 
    <body>
        <div class="data" >
            <div class="container-scroller">
                <div class="container-fluid page-body-wrapper full-page-wrapper">
                    <div class="content-wrapper d-flex align-items-center auth px-0">
                        <div class="row w-100 mx-0">
                            <div class="col-lg-4 mx-auto">
                                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                                <div class="brand-logo">
                                    <center><img src="images/logo-apotek.png" alt="logo"></center>
                                </div>
                                    <center>
                                        <h4>New here?</h4>
                                        <h6 class="font-weight-light">Signing up is easy. <br>It only takes a few steps</h6>
                                    </center>
                                    <form class="pt-3" action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="nama" class="form-control form-control-lg" id="exampleInputName" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="alamat" class="form-control form-control-lg" id="exampleInputAddress1" placeholder="Address">
                                        </div>
                                        <div class="form-group">
                                            <select name="jabatan" class="form-control form-control-lg" id="exampleFormControlSelect1">
                                                <option>Jabatan</option>
                                                <option>Owner</option>
                                                <option>Admin</option>
                                                <option>Karyawan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="telepon" class="form-control form-control-lg" id="exampleInputPhone1" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-lg" id="exampleInputUsername" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="mt-3">
                                            <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="signup" type="submit" value="SIGNUP">
                                        </div>
                                        <div class="text-center mt-4 font-weight-light">
                                            Already have an account? <a href="login.php" class="text-primary">Login</a>
                                        </div>
                                    </form>
                                    <?php 
                                        if(isset($_POST['signup'])){ 
                                            $nama = htmlspecialchars($_POST['nama']);
                                            $alamat = htmlspecialchars($_POST['alamat']);  
                                            $jabatan = htmlspecialchars($_POST['jabatan']);
                                            $email = htmlspecialchars($_POST['email']); 
                                            $telepon = htmlspecialchars($_POST['telepon']); 
                                            $username = htmlspecialchars($_POST['username']); 
                                            $password = htmlspecialchars($_POST['password']); 
                                            $encryptedpassword = password_hash($password, PASSWORD_DEFAULT);
                                                
                                            //mengecek ada username yang sama atau tidak 
                                            $query = mysqli_query($conn, "SELECT username from user WHERE username='$username'"); 
                                            $count = mysqli_num_rows($query); 
                                            
                                            if($count > 0){ 
                                                echo "<center><br>Tidak bisa melakukan registrasi karena username ini sudah terdaftar, silahkan langsung login</center>"; 
                                            }else{
                                                $queryinsert = mysqli_query($conn, "INSERT INTO user (nama, alamat, jabatan, email, telepon, username, password) 
                                                VALUES ('$nama', '$alamat', '$jabatan', '$email', '$telepon', '$username', '$encryptedpassword')"); 
                                                if($queryinsert){ 
                                                    echo "<center><br>SignUp Berhasil, Silahkan <a href=login.php>Login</a></center>"; 
                                                } 
                                            } 
                                        } 
                                    ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                 
        </div>
        <!-- plugins:js -->
        <script src="../../vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../../js/off-canvas.js"></script>
        <script src="../../js/hoverable-collapse.js"></script>
        <script src="../../js/template.js"></script>
        <script src="../../js/settings.js"></script>
        <script src="../../js/todolist.js"></script>
        <!-- endinject --> 
    </body> 
</html>