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
                                                <h2><b> Edit Data User</b></h2>
                                            </div>                                            
                                        </div><br>
                                        <form class="pt-3" action="" method="POST">
                                            <div class="form-group">
                                                <input class="form-control form-control-lg"type="text" name="username" readonly value="<?php echo $username;?>">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-lg"type="password" name="password" value="<?php echo $password;?>">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-lg"type="text" name="nama" readonly value="<?php echo $nama;?>">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-lg"type="alamat" name="alamat" value="<?php echo $alamat;?>">
                                            </div>
                                            <div class="form-group">
                                                <select type="jabatan" name="jabatan" value="<?php echo $jabatan;?>">
                                                    <option>Jabatan</option>
                                                    <option>Owner</option>
                                                    <option>Admin</option>
                                                    <option>Karyawan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-lg" type="email" name="email" value="<?php echo $email;?>">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-lg" type="text" name="telepon" value="<?php echo $telepon;?>">
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