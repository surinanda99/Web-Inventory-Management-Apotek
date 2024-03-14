<?php 
    include "koneksi.php"; 
    session_start();
    if($_SESSION['jabatan'] != "Karyawan"){
        header("location:login.php");
    }  
?> 
<!DOCTYPE html>
<<<<<<< HEAD
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
                                                <h2><b> Tambah Data Obat</b></h2>
                                            </div>                                            
                                        </div><br>
                                        <form action="insObat.php" class="pt-3" method='post' enctype="multipart/form-data" >
                                            <div class="form-group">
                                                <input class="form-control form-control-lg" type="text" name="tid" id="tid" placeholder="ID">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-lg" type="text" name="tnama" id="tnama" placeholder="Nama">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-lg" type="file" name="foto" id="foto" placeholder="Foto">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-lg" type="date" name="dexp" id="dexp" placeholder="Expired">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-lg" type="text" name="thrg" id="thrg" placeholder="Harga">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-lg" type="text" name="tjml" id="tjml" placeholder="Jumlah">
                                            </div>
                                            <div class="mt-3">
                                                <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="simpan" id="simpan" value="simpan" value="SIMPAN">
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
=======
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Document</title> 
    </head> 
    <body> 
        <div class="topnav"> 
            <b><a href="home.php">Home</a></b> 
            <b><a href="#">User</a></b>
            <b><a href="dataObat.php">Obat</a></b>
            <b><a href="dataTrans.php">Transaksi</a></b> 
            <b><a href="logout.php">Logout</a></b>  
        </div> 
        <center> 
            <div class="panjang"> 
                <h1 align="left" style="margin-bottom:30px">Input data barang</h1> 
                <form action="insObat.php" method='post' enctype="multipart/form-data"> 
                    <table class="table table-dark table-hover cols-6 rows-6"> 
                        <tr> 
                            <td>Id</td> 
                            <td>:</td> 
                            <td><input type="text" name="tid" id="tid"></td> 
                        </tr> 
                        <tr> 
                            <td>Nama Obat</td> 
                            <td>:</td> 
                            <td><input type="text" name="tnama" id="tnama"></td> 
                        </tr>
                        <tr> 
                            <td>Foto</td> 
                            <td>:</td> 
                            <td><input type="file" name="foto" id="foto"></td> 
                        </tr>
                        <tr> 
                            <td>Expired</td> 
                            <td>:</td> 
                            <td><input type="date" name="dexp" id="dexp"></td> 
                        </tr> 
                        <tr> 
                            <td>Harga</td> 
                            <td>:</td> 
                            <td><input type="text" name="thrg" id="thrg"></td> 
                        </tr> 
                        <tr> 
                            <td>Jumlah Stok</td> 
                            <td>:</td> 
                            <td><input type="text" name="tjml" id="tjml"></td> 
                        </tr> 
                    </table> 
                    <input type="submit" name="simpan" id="simpan" value="simpan"> 
                </form> 
>>>>>>> 5139516e321c3d808fa9ee24ecd17437e5ee388b
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