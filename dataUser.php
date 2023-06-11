<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    </head> 
    <body>
        <div class="topnav"> 
            <b><a href="home.php">Home</a></b> 
            <b><a href="login.php">Login</a></b> 
            <b><a href="logout.php">Logout</a></b> 
        </div> 
        <center> 
            <div class="panjang"> 
                <h3 align="left" style="margin-bottom:30px">Daftar User</h3> 
                <?php 
                    include "konekLogin.php"; 
                    $sql = "SELECT * from user ORDER BY id"; 
                    $hasil = $conn->query($sql); 
                    if ($hasil->num_rows>0) { 
                        echo "<table class='table table-dark table-hover cols-6 rows-6'> 
                            <tr> 
                                <th>ID</th> 
                                <th>Nama</th> 
                                <th>email</th> 
                                <th>telepon</th> 
                                <th>password</th> 
                                <th>Peran</th> 
                                <th>Edit</th> 
                                <th>Hapus</th> 
                            </tr>"; 
                    while ($row=$hasil->fetch_assoc()){ 
                        $teks="<tr>"; 
                        $teks.="<td>".$row["Id"]."</td>"; 
                        $teks.="<td>".$row["nama_user"]."</td>"; 
                        $teks.="<td>".$row["email"]."</td>"; 
                        $teks.="<td>".$row["telepon"]."</td>"; 
                        $teks.="<td>".$row["password"]."</td>"; 
                        $teks.="<td>".$row["peran"]."</td>"; 
                        $teks.="<td><a href='editUser.php?id=".$row["Id"]."'>Edit</a></td>"; 
                        $teks.="<td><a href='delUser.php?id=".$row["Id"]."'>Hapus</a></td>"; 
                        $teks.="</tr>"; 
                        echo $teks; 
                    } 
                    echo "</table>"; 
                    echo "<br><table border=1 cellpadding=10 cellspacing=0 align='left'>"; 
                    echo " <tr> 
                    <td bgcolor='lighyellow'>
                    <a style='text-decoration: none; color:black;' href='addUser.php''>Tambah</a></td> </tr>"; 
                    echo "</table>"; 
                    }else{ 
                        echo "Jumlah Record: 0";
                        echo "<br><table border=1 cellpadding=10 cellspacing=0 align='left'>"; 
                        echo " <tr> <td bgcolor='lighyellow'><a style='text-decoration: none; color:black;' href='addUser.php''>Tambah</a></td> </tr>"; 
                        echo "</table>"; 
                    } 
                    $conn->close(); 
                ?> 
            </div> 
        </center> 
    </body> 
</html>