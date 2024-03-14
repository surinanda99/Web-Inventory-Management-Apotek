<?php 
    include 'koneksi.php';
    if($_SESSION['jabatan'] != "Admin"){
        header("location:login.php");
    }  
    if(isset($_POST['sub'])){ 
        $nama = htmlspecialchars($_POST['nama']); 
        $username = htmlspecialchars($_POST['username']); 
        $email = htmlspecialchars($_POST['email']);
        $alamat = htmlspecialchars($_POST['alamat']);  
        $telepon = htmlspecialchars($_POST['telepon']); 
        $password = htmlspecialchars($_POST['password']); 
        $encryptedpassword = password_hash($password, PASSWORD_DEFAULT); 
        $jabatan = htmlspecialchars($_POST['jabatan']); 
        $queryinsert = "INSERT INTO user (nama, alamat, email, telepon, username, password, jabatan) VALUES ('$nama', '$alamat', '$email', '$telepon', '$username', '$encryptedpassword', '$jabatan')"; 
        $sql=mysqli_query($conn, $queryinsert); 
        if($sql){
            header("location:dataUser.php"); 
        }else{ 
            header("location:dataUser.php"); 
        } 
    } 
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'header.php'?>
    </head>
    <body>
        <div class="container-scroller">
            <!-- navbar atas -->
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <?php include 'navbar.php'?>
            </nav>

            <!-- isi content dan sidebar -->
            <div class="container-fluid page-body-wrapper">
                <!-- ini bagian setting warna sidebar dan headernya -->
                <div class="theme-setting-wrapper">
                    <?php include 'settingSidebar.php'?>
                </div>
                <!-- ini bagian sidebar -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <?php include 'sidebarKaryawan.php'?>
                </nav>
                <!-- ini conten tengah -->
                <div class="main-panel">
                    <!-- conten-->
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <h2><b> Tambah Data User</b></h2>
                                            </div>                                            
                                        </div><br>
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
                                                <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="sub" value="SIMPAN">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer -->
                        <footer class="footer">
                            <?php include'footer.php' ?>
                        </footer> 
                    </div>
                </div>
            </div> 
        </div>
        <!-- JavaScript -->
        <!-- Penulisan Waktu -->
        <script>
            var dt = new Date();
            document.getElementById("tanggalwaktu").innerHTML = (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (("0"+dt.getDate()).slice(-2)) +"/"+ (dt.getFullYear());
        </script>

        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="vendors/chart.js/Chart.min.js"></script>
        <script src="vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="js/dataTables.select.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="js/dashboard.js"></script>
        <script src="js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
    </body>

</html>