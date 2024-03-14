<<<<<<< HEAD
<?php 
    include "koneksi.php"; 
    $id=$_GET['id']; 
    $sql="SELECT * FROM Transaksi WHERE id='$id'"; 
    $hasil=$conn->query($sql); 
    while($row=$hasil->fetch_assoc()){ 
        $namabrg=$row["namabrg"]; $jml=$row["jml"]; $tglTransaksi=$row["tglTransaksi"]; $totHarga=$row["totHarga"]; $Keterangan=$row["Keterangan"]; $bukti=$row["bukti"]; 
    } 
?> 
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Transaksi</title> 
    </head> 
    <body> 
        <div class="topnav"> 
            <b><a href="home.php">Home</a></b> 
            <b><a href="dataUSer.php">User</a></b>
            <b><a href="dataObats.php">Obat</a></b>
            <b><a href="dataTrans.php">Transaksi</a></b> 
            <b><a href="logout.php">Logout</a></b> 
        </div> 
        <center> 
            <div class="panjang"> 
                <h1 align="left" style="margin-bottom:30px">Edit Data Transaksi</h1> 
                <form action="updTrans.php" method="post" enctype="multipart/form-data"> 
                    <table class="table bg-warning cols-6 rows-6"> 
                        <tr> 
                            <td>ID</td> 
                            <td>:</td> 
                            <td><input type="text" name="tid" id="tid" value="<?= $id; ?>" readonly></td> 
                            <td></td> 
                        </tr> 
                        <tr> 
                            <td>Nama Barang</td> 
                            <td>:</td> 
                            <td><input type="text" name="tnama" id="tnama" value="<?= $namabrg; ?>"></td> 
                            <td></td> 
                        </tr>
                        <tr> 
                            <td>Jumlah </td> 
                            <td>:</td>
                            <td><input type="text" name="tjml" id="tjml" value="<?= $jml; ?>"></td> 
                            <td></td> 
                        </tr> 
                        <tr> 
                            <td>Tanggal</td> 
                            <td>:</td> 
                            <td><input type="date" name="ttgl" id="ttgl" value="<?= $tglTransaksi; ?>"></td> 
                            <td></td> 
                        </tr> 
                        <tr> 
                            <td>Total Harga</td> 
                            <td>:</td> 
                            <td><input type="text" name="thrg" id="thrg" value="<?= $totHarga; ?>"></td> 
                            <td></td> 
                        </tr>
                        <tr> 
                            <td>Keterangan</td> 
                            <td>:</td> 
                            <td><input type="text" name="tket" id="tket" value="<?= $Keterangan; ?>"></td> 
                            <td></td> 
                        </tr>
                        <tr> 
                            <td>Bukti</td> 
                            <td>:</td> 
                            <td><input type="file" name="bukti" id="bukti"></td> 
                            <td><input type="hidden" name="foto_lama" id="foto_lama" value="<?= $bukti; ?>"></td> 
                        </tr> 
                        <tr> 
                            <td><img src="img/<?php echo $bukti; ?>" width="150px" height="120px"></td> 
                            <td></td> 
                            <td><input type="checkbox" name="ubah_foto" id="ubah_foto" value="true">Ceklis Jika ingin mengubah foto</td> 
                            <td></td> 
                        </tr>
                         
                    </table> 
                    <input type="submit" value="update"> 
                </form> 
            </div> 
        </center> 
    </body> 
=======
<?php 
    include "koneksi.php"; 
    $id=$_GET['id']; 
    $sql="SELECT * FROM Transaksi WHERE id='$id'"; 
    $hasil=$conn->query($sql); 
    while($row=$hasil->fetch_assoc()){ 
        $namabrg=$row["namabrg"]; $jml=$row["jml"]; $tglTransaksi=$row["tglTransaksi"]; $totHarga=$row["totHarga"]; $Keterangan=$row["Keterangan"]; $bukti=$row["bukti"]; 
    } 
?> 
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Transaksi</title> 
    </head> 
    <body> 
        <div class="topnav"> 
            <b><a href="home.php">Home</a></b> 
            <b><a href="dataUSer.php">User</a></b>
            <b><a href="dataObats.php">Obat</a></b>
            <b><a href="dataTrans.php">Transaksi</a></b> 
            <b><a href="logout.php">Logout</a></b> 
        </div> 
        <center> 
            <div class="panjang"> 
                <h1 align="left" style="margin-bottom:30px">Edit Data Transaksi</h1> 
                <form action="updTrans.php" method="post" enctype="multipart/form-data"> 
                    <table class="table bg-warning cols-6 rows-6"> 
                        <tr> 
                            <td>ID</td> 
                            <td>:</td> 
                            <td><input type="text" name="tid" id="tid" value="<?= $id; ?>" readonly></td> 
                            <td></td> 
                        </tr> 
                        <tr> 
                            <td>Nama Barang</td> 
                            <td>:</td> 
                            <td><input type="text" name="tnama" id="tnama" value="<?= $namabrg; ?>"></td> 
                            <td></td> 
                        </tr>
                        <tr> 
                            <td>Jumlah </td> 
                            <td>:</td>
                            <td><input type="text" name="tjml" id="tjml" value="<?= $jml; ?>"></td> 
                            <td></td> 
                        </tr> 
                        <tr> 
                            <td>Tanggal</td> 
                            <td>:</td> 
                            <td><input type="date" name="ttgl" id="ttgl" value="<?= $tglTransaksi; ?>"></td> 
                            <td></td> 
                        </tr> 
                        <tr> 
                            <td>Total Harga</td> 
                            <td>:</td> 
                            <td><input type="text" name="thrg" id="thrg" value="<?= $totHarga; ?>"></td> 
                            <td></td> 
                        </tr>
                        <tr> 
                            <td>Keterangan</td> 
                            <td>:</td> 
                            <td><input type="text" name="tket" id="tket" value="<?= $Keterangan; ?>"></td> 
                            <td></td> 
                        </tr>
                        <tr> 
                            <td>Bukti</td> 
                            <td>:</td> 
                            <td><input type="file" name="bukti" id="bukti"></td> 
                            <td><input type="hidden" name="foto_lama" id="foto_lama" value="<?= $bukti; ?>"></td> 
                        </tr> 
                        <tr> 
                            <td><img src="img/<?php echo $bukti; ?>" width="150px" height="120px"></td> 
                            <td></td> 
                            <td><input type="checkbox" name="ubah_foto" id="ubah_foto" value="true">Ceklis Jika ingin mengubah foto</td> 
                            <td></td> 
                        </tr>
                         
                    </table> 
                    <input type="submit" value="update"> 
                </form> 
            </div> 
        </center> 
    </body> 
>>>>>>> 5139516e321c3d808fa9ee24ecd17437e5ee388b
</html>