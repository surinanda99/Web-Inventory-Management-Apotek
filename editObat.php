<?php 
    include "koneksi.php";  
    $id=$_GET['id']; 
    $sql="SELECT * FROM obat WHERE id='$id'"; 
    $hasil=$conn->query($sql); 
    while($row=$hasil->fetch_assoc()){ 
        $namaObat=$row["namaObat"]; $harga=$row["harga"]; $stok=$row["stok"]; $foto=$row["foto"]; 
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
                                                <h2><b> Edit Data Obat</b></h2>
                                            </div>                                            
                                        </div><br>
                                        <form action="updObat.php" class="pt-3" method='post' enctype="multipart/form-data" >
                                            <div class="form-group">
                                                <input class="form-control form-control-lg" type="text" name="tid" id="tid" value="<?= $id; ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-lg" type="text" name="tnama" id="tnama" value="<?= $namaObat; ?>">
                                            </div>
                                            <div class="form-group">
                                                <img src="img/<?php echo $foto; ?>" width="150px" height="120px">
                                                <input class="form-control form-control-lg" type="file" name="foto" id="foto">
                                                <input type="hidden" name="foto_lama" id="foto_lama" value="<?= $foto; ?>">
                                                <input type="checkbox" name="ubah_foto" id="ubah_foto" value="true">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-lg" type="date" name="dexp" id="dexp" value="<?= $expired; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-lg" type="text" name="thrg" id="thrg" value="<?= $harga; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-lg" type="text" name="tjml" id="tjml" value="<?= $stok; ?>">
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