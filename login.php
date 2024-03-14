<?php 
    include "koneksi.php"; 
    session_start(); 
?> 
<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'header.php'?>
  </head>

  <body>
    <div class="login">
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
                                <h4>Hello! let's get started</h4>
                                <h6 class="font-weight-light">Sign in to continue.</h6>
                            </center>
                            <form class="pt-3" action="" method="POST" class="form-holder">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-lg" name="jabatan" id="exampleInputJabatan1">
                                        <option>Jabatan</option>
                                        <option>Owner</option>
                                        <option>Admin</option>
                                        <option>Karyawan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="login" type="submit" value="SIGNIN">
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="registrasi.php" class="text-primary">Create</a>
                                </div>
                            </form>
                            <?php 
                                if(isset($_POST['login'])){ 
                                    $username = htmlspecialchars($_POST['username']); 
                                    $jabatan  = htmlspecialchars($_POST['jabatan']); 
                                    $password = htmlspecialchars($_POST['password']); 
                                    
                                    $alldata = mysqli_query($conn, "SELECT * FROM user"); 
                                    $query = mysqli_query($conn, "SELECT username, jabatan from user WHERE username='$username' AND jabatan='$jabatan'"); 
                                    $count = mysqli_num_rows($query);
                                    if($count > 0){ 
                                        //jika username ditemukan dan ada di database 
                                        $data = mysqli_fetch_array($query); 
                                        $data2 = mysqli_fetch_array($alldata); 
                                        //mengecek password sesuai atau tidak 
                                        if(password_verify($password, $data2['password'])){ 
                                            //cek jika user login sebagai  
                                            if($data['jabatan']=="Owner"){
                                                $_SESSION['jabatan']="Owner";   
                                                header("location:homeOwner.php"); 
                                            }else if ($data['jabatan']=="Admin"){ 
                                                $_SESSION['jabatan']="Admin";  
                                                header("location:homeAdmin.php"); 
                                            }else if ($data['jabatan']=="Karyawan"){
                                                $_SESSION['jabatan']="Karyawan";   
                                                header("location:homeKaryawan.php"); 
                                            }else{ 
                                                echo "your password invalid"; 
                                            } 
                                        } 
                                    }else{ 
                                        echo "<center>your account not exist <a href= register.php >klik untuk registrasi</a></center>"; 
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
=======
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
            <label for="jabatan">Jabatan: </label><br> 
            <input type="text" name="jabatan" id="jabatan"> 
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
            $jabatan = $_POST['jabatan']; 
            
            $alldata = mysqli_query($conn, "SELECT * FROM user"); 
            $query = mysqli_query($conn, "SELECT username, jabatan from user WHERE username='$username' AND jabatan='$jabatan'"); 
            $count = mysqli_num_rows($query);
            if($count > 0){ 
                //jika username ditemukan dan ada di database 
                $data = mysqli_fetch_array($query); 
                $data2 = mysqli_fetch_array($alldata); 
                //mengecek password sesuai atau tidak 
                if(password_verify($password, $data2['password'])){ 
                    //cek jika user login sebagai Admin 
                    if($data['jabatan']=="admin"||"Admin"){ 
                        header("location:home.php"); 
                    }else if ($data['jabatan']=="karyawan"||"Karyawan"){ 
                        header("location:homeKaryawan.php"); 
                    }else if ($data['jabatan']=="owner"||"Owner"){ 
                        header("location:homeOwner.php"); 
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
>>>>>>> 5139516e321c3d808fa9ee24ecd17437e5ee388b
</html>