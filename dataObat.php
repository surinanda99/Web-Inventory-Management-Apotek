<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Document</title> 
        
    </head> 
    <body> 
        <div class="topnav"> <b>
            <a href="home.php">Home</a></b> 
            <b><a href="login.php">Login</a></b> 
            <b><a href="logout.php">Logout</a></b> 
        </div> 
        <center> 
        <div class="panjang"> 
            <h3 align="left" style="margin-bottom:30px">Daftar Barang</h3>
            <?php include "konekObat.php"; 
             $sql = "SELECT * from barang ORDER BY id"; 
             $hasil = $conn->query($sql); 
             
                if ($hasil->num_rows>0) { 
                    echo "<table class='table table-dark table-hover cols-6 rows-6'> 
                        <tr> 
                            <th>ID</th> 
                            <th>Nama</th> 
                            <th>harga</th> 
                            <th>Jumlah</th> 
                            <th>Foto</th> 
                            <th>Edit</th> 
                            <th>Hapus</th> 
                        </tr>"; 
                    while ($row=$hasil->fetch_assoc()){
                        $teks="<tr>"; 
                        $teks.="<td>".$row["id"]."</td>"; 
                        $teks.="<td>".$row["nama"]."</td>"; 
                        $teks.="<td>".$row["hrg"]."</td>"; 
                        $teks.="<td>".$row["jml"]."</td>"; 
                        $teks.="<td><img src='img1/".$row["foto"]."' style='width: 100px; height: 100px;'></img></td>"; 
                        $teks.="<td><a href='editBrg.php?id=".$row["id"]."'>Edit</a></td>"; 
                        $teks.="<td><a href='delBrg.php?id=".$row["id"]."'>Hapus</a></td>"; 
                        $teks.="</tr>"; 
                        echo $teks; 
                        } 
                        echo "</table>"; 
                        echo "<br><table border=1 cellpadding=10 cellspacing=0 align='left'>"; 
                        echo " 
                        <tr> 
                            <td bgcolor='lighyellow'><a style='text-decoration: none; color:black;' href='addBrg.php''>Tambah</a></td> 
                        </tr>"; 
                        echo "</table>"; 
                }else{ 
                    echo "Jumlah Record: 0"; 
                    echo "<br><table border=1 cellpadding=10 cellspacing=0 align='left'>"; 
                    echo " <tr> <td bgcolor='lighyellow'><a style='text-decoration: none; color:black;' href='addBrg.php''>Tambah</a></td> </tr>"; 
                    echo "</table>"; 
                } 
                $conn->close(); 
            ?>
        </div> 
        </center> 
    </body> 
</html>