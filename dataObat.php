<?php 
    include "koneksi.php"; 
    session_start();
    if($_SESSION['jabatan'] != "Karyawan"){
        header("location:login.php");
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
                                                <h2><b>Data Obat</b></h2>
                                            </div>
                                            <div class="col-sm-0">
                                            <a href="addObat.php" class="btn btn-primary btn-icon-text" ><i class="ti-file btn-icon-prepend" ></i><span>Tambah Data Obat</span></a>                                            
                                            </div>
                                        </div><br><br>                               
                                        <div class="table-responsive">
                                            <?php 
                                                include "koneksi.php"; 
                                                $sql = "SELECT * from obat ORDER BY id"; 
                                                $hasil = $conn->query($sql); 
                                                if ($hasil->num_rows>0) { 
                                                    echo "<table class='table table-striped table-borderless'> 
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th> 
                                                                <th>Nama</th>
                                                                <th>Foto</th> 
                                                                <th>Expired</th>  
                                                                <th>Harga</th> 
                                                                <th>Stok</th> 
                                                                <th>Edit</th> 
                                                                <th>Hapus</th>  
                                                            </tr>  
                                                        </thead>"; 
                                                    while ($row=$hasil->fetch_assoc()){ 
                                                        $teks="<tr>"; 
                                                        $teks.="<td>".$row["id"]."</td>"; 
                                                        $teks.="<td>".$row["namaObat"]."</td>"; 
                                                        $teks.="<td><img src='img/".$row["foto"]."' style='width: 100px; height: 100px;'></img></td>"; 
                                                        $teks.="<td>".$row["expired"]."</td>"; 
                                                        $teks.="<td>".$row["harga"]."</td>"; 
                                                        $teks.="<td>".$row["stok"]."</td>"; 
                                                        $teks.="<td><a href='editObat.php?id=".$row["id"]."'>Edit</a></td>"; 
                                                        $teks.="<td><a href='delObat.php?id=".$row["id"]."'>Hapus</a></td>"; 
                                                        $teks.="</tr>"; 
                                                        echo $teks; 
                                                    }
                                                    echo"</table>";
                                                }
                                                $conn->close(); 
                                            ?> 
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
        </div>
        
<<<<<<< HEAD


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
    </head> 
    <body> 
        <div class="topnav"> <b>
            <b><a href="home.php">Home</a></b> 
            <b><a href="#">User</a></b>
            <b><a href="#">Obat</a></b>
            <b><a href="dataTrans.php">Transaksi</a></b>
            <b><a href="dataLaporan.php">Transaksi</a></b>  
            <b><a href="logout.php">Logout</a></b> 
        </div> 
        <center> 
        <div class="panjang"> 
            <h3 align="left" style="margin-bottom:30px">Daftar Obat</h3>
            <?php include "koneksi.php"; 
             $sql = "SELECT * from obat ORDER BY id"; 
             $hasil = $conn->query($sql); 
             
                if ($hasil->num_rows>0) { 
                    echo "<table class='table table-dark table-hover cols-6 rows-6'> 
                        <tr> 
                            <th>ID</th> 
                            <th>Nama</th>
                            <th>Foto</th> 
                            <th>Expired</th>  
                            <th>Harga</th> 
                            <th>Stok</th> 
                            <th>Edit</th> 
                            <th>Hapus</th> 
                        </tr>"; 
                    while ($row=$hasil->fetch_assoc()){
                        $teks="<tr>"; 
                        $teks.="<td>".$row["id"]."</td>"; 
                        $teks.="<td>".$row["namaObat"]."</td>"; 
                        $teks.="<td><img src='img/".$row["foto"]."' style='width: 100px; height: 100px;'></img></td>"; 
                        $teks.="<td>".$row["expired"]."</td>"; 
                        $teks.="<td>".$row["harga"]."</td>"; 
                        $teks.="<td>".$row["stok"]."</td>"; 
                        $teks.="<td><a href='editObat.php?id=".$row["id"]."'>Edit</a></td>"; 
                        $teks.="<td><a href='delObat.php?id=".$row["id"]."'>Hapus</a></td>"; 
                        $teks.="</tr>"; 
                        echo $teks; 
                        } 
                        echo "</table>"; 
                        echo "<br><table border=1 cellpadding=10 cellspacing=0 align='left'>"; 
                        echo " 
                        <tr> 
                            <td bgcolor='lighyellow'><a style='text-decoration: none; color:black;' href='addObat.php''>Tambah</a></td> 
                        </tr>"; 
                        echo "</table>"; 
                }else{ 
                    echo "Jumlah Record: 0"; 
                    echo "<br><table border=1 cellpadding=10 cellspacing=0 align='left'>"; 
                    echo " <tr> <td bgcolor='lighyellow'><a style='text-decoration: none; color:black;' href='addObat.php''>Tambah</a></td> </tr>"; 
                    echo "</table>"; 
                } 
                $conn->close(); 
            ?>
        </div> 
        </center> 
    </body> 
>>>>>>> 5139516e321c3d808fa9ee24ecd17437e5ee388b
</html>