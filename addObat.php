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
            </div> 
        </center> 
    </body> 
</html>