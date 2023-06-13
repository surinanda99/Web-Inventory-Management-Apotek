<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Data Transaksi</title> 
        
    </head> 
    <body> 
        <div class="topnav"> <b>
            <b><a href="home.php">Home</a></b> 
            <b><a href="dataUSer.php">User</a></b>
            <b><a href="#">Obat</a></b>
            <b><a href="#">Transaksi</a></b> 
            <b><a href="logout.php">Logout</a></b> 
        </div> 
        <center> 
        <div class="panjang"> 
            <h3 align="left" style="margin-bottom:30px">Daftar Transaksi</h3>
            <?php include "koneksi.php"; 
             $sql = "SELECT * from transaksi ORDER BY id"; 
             $hasil = $conn->query($sql); 
             
                if ($hasil->num_rows>0) { 
                    echo "<table border = '5' cellpadding='10' class='table bg-warning cols-6 rows-6'> 
                        <tr> 
                            <th>ID</th> 
                            <th>Nama</th>  
                            <th>Jumlah</th> 
                            <th>tanggal</th>
                            <th>total Harga</th>
                            <th>Keterangan</th>
                            <th>Bukti</th> 
                            <th>Edit</th> 
                            <th>Hapus</th> 
                        </tr>"; 
                    while ($row=$hasil->fetch_assoc()){
                        $teks="<tr>"; 
                        $teks.="<td>".$row["id"]."</td>"; 
                        $teks.="<td>".$row["namabrg"]."</td>";  
                        $teks.="<td>".$row["jml"]."</td>";
                        $teks.="<td>".$row["tglTransaksi"]."</td>";
                        $teks.="<td>".$row["totHarga"]."</td>";
                        $teks.="<td>".$row["Keterangan"]."</td>";                         
                        $teks.="<td><img src='img/".$row["bukti"]."' style='width: 100px; height: 100px;'></img></td>"; 
                        $teks.="<td><a href='editTrans.php?id=".$row["id"]."'>Edit</a></td>"; 
                        $teks.="<td><a href='delTrans.php?id=".$row["id"]."'>Hapus</a></td>"; 
                        $teks.="</tr>"; 
                        echo $teks; 
                        } 
                        echo "</table>"; 
                        echo "<br><table border=1 cellpadding=10 cellspacing=0 align='left'>"; 
                        echo " 
                        <tr> 
                            <td bgcolor='lighyellow'><a style='text-decoration: none; color:black;' href='addTrans.php''>Tambah</a></td> 
                        </tr>"; 
                        echo "</table>"; 
                }else{ 
                    echo "Jumlah Record: 0"; 
                    echo "<br><table border=1 cellpadding=10 cellspacing=0 align='left'>"; 
                    echo " <tr> <td bgcolor='lighyellow'><a style='text-decoration: none; color:black;' href='addTrans.php''>Tambah</a></td> </tr>"; 
                    echo "</table>"; 
                } 
                $conn->close(); 
            ?>
        </div> 
        </center> 
    </body> 
</html>