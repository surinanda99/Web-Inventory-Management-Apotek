<?php 
    include "koneksi.php"; 
    session_start(); 
    if($_SESSION['jabatan'] != "Admin"){
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
                    <?php include 'sidebarAdmin.php'?>
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
                            <div class="col-md-5 grid-margin stretch-card">
                            <div class="card tale-bg">
                                <div class="card-people mt-auto">
                                <img src="images/apotek.png" alt="people">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-7 grid-margin transparent">
                            <br><br><br>
                            <div class="row">
                                <div class="col-md-6 mb-6 mb-lg-0 stretch-card transparent">
                                <div class="card card-tale">
                                    <div class="card-body">
                                        <center><a class="fs-30 mb-3" href="dataUser.php" style="text-decoration: none; color:white; "><b>USER</b></a></center>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6 mb-6 mb-lg-0 stretch-card transparent">
                                <div class="card card-dark-blue">
                                    <div class="card-body">
                                        <center><a class="fs-30 mb-3" href="obatAdmin.php" style="text-decoration: none; color:white; "><b>OBAT</b></a></center>
                                    </div>
                                </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6 mb-6 mb-lg-0 stretch-card transparent">
                                <div class="card card-light-blue">
                                    <div class="card-body">
                                        <center><a class="fs-30 mb-3" href="transaksiAdmin.php" style="text-decoration: none; color:white; "><b>TRANSAKSI</b></a></center>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6 mb-6 mb-lg-0stretch-card transparent">
                                <div class="card card-light-danger">
                                    <div class="card-body">
                                        <center><a class="fs-30 mb-3" href="laporanAdmin.php" style="text-decoration: none; color:white; "><b>LAPORAN</b></a></center>
                                    </div>
                                </div>
                                </div>
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