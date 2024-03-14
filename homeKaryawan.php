<<<<<<< HEAD
<?php 
    include "koneksi.php"; 
    session_start();
    if($_SESSION['jabatan'] != "Karyawan"){
        header("location:login.php");
        exit();
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
                            <div class="col-md-12 grid-margin">
                                <div class="row">
                                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Welcome To Apotek</h3>
                                    <h6 class="font-weight-normal mb-0">All systems are running smoothly! </h6>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                    <div class="justify-content-end d-flex">
                                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                        <button class="btn btn-sm btn-light bg-white " type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="mdi mdi-calendar"></i> Today (<span id="tanggalwaktu"></span>)
                                        </button>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 grid-margin stretch-card">
                            <div class="card tale-bg">
                                <div class="card-people mt-auto">
                                <img src="images/apotek.png" alt="people">
                                </div>
                            </div>
                            </div><br>
                            <div class="col-md-6 grid-margin transparent"><br><br><br><br>
                        
                            <div class="row">
                                <div class="col-md-6 mb-lg-0 stretch-card transparent">
                                <div class="card card-dark-blue">
                                    <div class="card-body">
                                        <center><a class="fs-30 mb-3" href="dataObat.php" style="text-decoration: none; color:white; "><b>OBAT</b></a></center>
                                    </div>
                                </div>
                                </div>
                            </div><br><br>
                            <div class="row">
                                <div class="col-md-6  mb-lg-0stretch-card transparent">
                                <div class="card card-light-danger">
                                    <div class="card-body">
                                        <center><a class="fs-30 mb-3" href="dataLaporan.php" style="text-decoration: none; color:white; "><b>LAPORAN</b></a></center>
                                    </div>
                                </div>
                                </div>
                            </div><br><br>
                            <div class="row">
                                <div class="col-md-6 mb-lg-0 stretch-card transparent">
                                <div class="card card-light-blue">
                                    <div class="card-body">
                                        <center><a class="fs-30 mb-3" href="dataTrans.php" style="text-decoration: none; color:white; "><b>TRANSAKSI</b></a></center>
                                    </div>
                                </div>
                                </div>                                
                            </div>
                            </div><br>
                        </div>
                    </div>
                    <!-- footer -->
                    <footer class="footer">
                        <?php include'footer.php' ?>
                    </footer> 
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

=======
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Document</title>
    </head> 
    <body>
        <div class="topnav"> 
            <b><a href="#">Home</a></b> 
            <b><a href="#">User</a></b>
            <b><a href="dataObat.php">Obat</a></b>
            <b><a href="dataTrans.php">Transaksi</a></b>
            <b><a href="laporan.php">Laporan</a></b>  
            <b><a href="logout.php">Logout</a></b>
        </div> 
        <br><br><br><br><br> 
        <div class="kotak1"> 
            <center> 
                <a href="Home.php">Home</a> 
            </center> 
        </div> 
        <br><br>
        <div class="kotak2"> 
            <center> 
                <a href="dataObat.php">Edit Obat</a> 
            </center> 
        </div> 
        <br><br> 
        <div class="kotak3"> 
            <center> 
                <a href="#">Edit user</a> 
            </center> 
        </div>
        <br><br> 
        <div class="kotak4"> 
            <center> 
                <a href="laporan.php">Laporan</a> 
            </center> 
        </div>  
    </body> 
>>>>>>> 5139516e321c3d808fa9ee24ecd17437e5ee388b
</html>