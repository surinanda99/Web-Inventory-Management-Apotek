<<<<<<< HEAD
<<<<<<< HEAD
<?php

// koneksi

    include "koneksi.php"; 
    session_start();
    if($_SESSION['jabatan'] != "Owner"){
        header("location:login.php");
    } 

// simpan data
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nb = $_POST['nama_barang'];
    $hrg = $_POST['harga'];
    $qty = $_POST['qty'];
    $tgl = $_POST['tanggal'];
    $ket = $_POST['ket'];

    $q = mysqli_query($conn, "INSERT INTO trans (id, nama_barang, harga, qty, tanggal, ket) VALUES ('$id', '$nb', '$hrg', '$qty', '$tgl', '$ket')");

    if ($q) {
        header('Location: dataTrans.php');
    } else {
        echo "<script>alert('Gagal menambahkan data'); window.location.href = dataTrans.php;</script>";
    }
}

// hapus data
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $q = mysqli_query($conn, "DELETE FROM trans WHERE id='$id'");

    if ($q) {
        header('Location: dataTrans.php');
    } else {
        echo "<script>alert('Gagal menghapus data'); window.location.href = dataTrans.php;</script>";
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
                    <?php include 'sidebarOwner.php'?>
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
                                                <h2><b>Data User</b></h2>
                                            </div>
                                        </div><br><br>
                                        <div class="table-responsive">
                                            <?php 
                                                include "koneksi.php"; 
                                                $sql = "SELECT * from user ORDER BY id"; 
                                                $hasil = $conn->query($sql); 
                                                if ($hasil->num_rows>0) { 
                                                    echo "<table class='table table-striped table-borderless'> 
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th> 
                                                                <th>Nama</th>
                                                                <th>Username</th>  
                                                                <th>Email</th> 
                                                                <th>Telepon</th> 
                                                                <th>password</th> 
                                                                <th>jabatan</th>
                                                                <th>Alamat</th>  
                                                            </tr>  
                                                        </thead>"; 
                                                    while ($row=$hasil->fetch_assoc()){ 
                                                        $teks="<tr>"; 
                                                        $teks.="<td>".$row["id"]."</td>"; 
                                                        $teks.="<td>".$row["nama"]."</td>";
                                                        $teks.="<td>".$row["username"]."</td>";  
                                                        $teks.="<td>".$row["email"]."</td>";
                                                        $teks.="<td>".$row["telepon"]."</td>"; 
                                                        $teks.="<td>".$row["password"]."</td>"; 
                                                        $teks.="<td>".$row["jabatan"]."</td>";
                                                        $teks.="<td>".$row["alamat"]."</td>";  
                                                        $teks.="</tr>"; 
                                                        echo $teks; 
                                                    }
                                                    echo"</table>";
                                                }
                                            ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <h2><b>Data Obat</b></h2>
                                            </div>
                                            <div class="col-sm-0">
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
                                                        $teks.="</tr>"; 
                                                        echo $teks; 
                                                    }
                                                    echo"</table>";
                                                }
                                            ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">                       
                                            <!--code menampilkan data-->
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <h2><b>Data Transaksi</b></h2><br>
                                            </div>   
                                            <table class="table table-striped table-borderless">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Id</th>
                                                    <th>Nama Barang</th>
                                                    <th>Harga Satuan</th>
                                                    <th>Jumlah Barang</th>
                                                    <th>Tanggal</th>
                                                    <th>Keterangan</th>
                                                    <th>Total</th>
                                                </tr>

                                                <?php
                                                // perintah tampil data
                                                $q = mysqli_query($conn, "SELECT * FROM trans");

                                                $total = 0;
                                                $tot_bayar = 0;
                                                $no = 1;

                                                while ($r = $q->fetch_assoc()) {
                                                    // total adalah hasil dari harga x qty
                                                    $total = $r['harga'] * $r['qty'];
                                                    // total bayar adalah penjumlahan dari keseluruhan total
                                                    $tot_bayar += $total;
                                                    ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $r['id'] ?></td>
                                                        <td><?= ucwords($r['nama_barang']) ?></td>
                                                        <td><?= $r['harga'] ?></td>
                                                        <td><?= $r['qty'] ?></td>
                                                        <td><?= $r['tanggal'] ?></td>
                                                        <td><?= $r['ket'] ?></td>
                                                        <td><?= $total ?></td>
                                                    </tr>

                                                <?php
                                                }
                                                ?>

                                                <tr>
                                                    <th colspan="7"><center>Total Transaksi</center></th>
                                                    <th><?= $tot_bayar ?></th>
                                                </tr>
                                            </table>
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
        <title>Laporan </title> 
        
    </head> 
    <body> 
        <div class="topnav"> <b>
            <b><a href="home.php">Home</a></b> 
            <b><a href="#">User</a></b>
            <b><a href="#">Obat</a></b>
            <b><a href="dataTrans.php">Transaksi</a></b>
            <b><a href="laporan.php">Transaksi</a></b>  
            <b><a href="logout.php">Logout</a></b> 
        </div> 
        <center> 
        <div class="panjang"> 
            <h3 align="left" style="margin-bottom:30px">Laporan</h3>
            <?php include "koneksi.php"; 
             $sql = "SELECT * from laporan ORDER BY id"; 
             $hasil = $conn->query($sql); 
             
                if ($hasil->num_rows>0) { 
                    echo "<table class='table table-dark table-hover cols-6 rows-6'> 
                        <tr> 
                            <th>ID</th> 
                            <th>Nama Barang</th>
                            <th>Harga</th> 
                            <th>Jumlah Terjual</th>  
                            <th>Total</th> 
                        </tr>"; 
                    while ($row=$hasil->fetch_assoc()){
                        $teks="<tr>"; 
                        $teks.="<td>".$row["id"]."</td>"; 
                        $teks.="<td>".$row["nama_barang"]."</td>";
                        $teks.="<td>".$row["harga"]."</td>"; 
                        $teks.="<td>".$row["jumlah_terjual"]."</td>"; 
                        $teks.="<td>".$row["total"]."</td>"; 
                        //$teks.="<td><a href='editObat.php?id=".$row["id"]."'>Edit</a></td>"; 
                        //$teks.="<td><a href='delObat.php?id=".$row["id"]."'>Hapus</a></td>"; 
                        $teks.="</tr>"; 
                        echo $teks; 
                        } 
                        echo "</table>"; 
                        echo "<br><table border=1 cellpadding=10 cellspacing=0 align='left'>"; 
                        echo " 
                        <tr> 
                            <td bgcolor='lighyellow'><a style='text-decoration: none; color:black;' href='addLaporan.php''>Tambah</a></td> 
                        </tr>"; 
                        echo "</table>"; 
                }else{ 
                    echo "Jumlah Record: 0"; 
                    echo "<br><table border=1 cellpadding=10 cellspacing=0 align='left'>"; 
                    echo " <tr> <td bgcolor='lighyellow'><a style='text-decoration: none; color:black;' href='addLaporan.php''>Tambah</a></td> </tr>"; 
                    echo "</table>"; 
                } 
                $conn->close(); 
            ?>
        </div> 
        </center> 
    </body> 
>>>>>>> 5139516e321c3d808fa9ee24ecd17437e5ee388b
=======
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Laporan </title> 
        
    </head> 
    <body> 
        <div class="topnav"> <b>
            <b><a href="home.php">Home</a></b> 
            <b><a href="#">User</a></b>
            <b><a href="#">Obat</a></b>
            <b><a href="dataTrans.php">Transaksi</a></b>
            <b><a href="laporan.php">Transaksi</a></b>  
            <b><a href="logout.php">Logout</a></b> 
        </div> 
        <center> 
        <div class="panjang"> 
            <h3 align="left" style="margin-bottom:30px">Laporan</h3>
            <?php include "koneksi.php"; 
             $sql = "SELECT * from laporan ORDER BY id"; 
             $hasil = $conn->query($sql); 
             
                if ($hasil->num_rows>0) { 
                    echo "<table class='table table-dark table-hover cols-6 rows-6'> 
                        <tr> 
                            <th>ID</th> 
                            <th>Nama Barang</th>
                            <th>Harga</th> 
                            <th>Jumlah Terjual</th>  
                            <th>Total</th> 
                        </tr>"; 
                    while ($row=$hasil->fetch_assoc()){
                        $teks="<tr>"; 
                        $teks.="<td>".$row["id"]."</td>"; 
                        $teks.="<td>".$row["nama_barang"]."</td>";
                        $teks.="<td>".$row["harga"]."</td>"; 
                        $teks.="<td>".$row["jumlah_terjual"]."</td>"; 
                        $teks.="<td>".$row["total"]."</td>"; 
                        //$teks.="<td><a href='editObat.php?id=".$row["id"]."'>Edit</a></td>"; 
                        //$teks.="<td><a href='delObat.php?id=".$row["id"]."'>Hapus</a></td>"; 
                        $teks.="</tr>"; 
                        echo $teks; 
                        } 
                        echo "</table>"; 
                        echo "<br><table border=1 cellpadding=10 cellspacing=0 align='left'>"; 
                        echo " 
                        <tr> 
                            <td bgcolor='lighyellow'><a style='text-decoration: none; color:black;' href='addLaporan.php''>Tambah</a></td> 
                        </tr>"; 
                        echo "</table>"; 
                }else{ 
                    echo "Jumlah Record: 0"; 
                    echo "<br><table border=1 cellpadding=10 cellspacing=0 align='left'>"; 
                    echo " <tr> <td bgcolor='lighyellow'><a style='text-decoration: none; color:black;' href='addLaporan.php''>Tambah</a></td> </tr>"; 
                    echo "</table>"; 
                } 
                $conn->close(); 
            ?>
        </div> 
        </center> 
    </body> 
>>>>>>> 5139516e321c3d808fa9ee24ecd17437e5ee388b
</html>