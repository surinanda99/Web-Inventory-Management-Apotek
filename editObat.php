<?php 
include "konekObat.php"; $id=$_GET['id']; $sql="SELECT * FROM barang WHERE id='$id'"; $hasil=$conn->query($sql); while($row=$hasil->fetch_assoc()){ $nama=$row["nama"]; $hrg=$row["hrg"]; $jml=$row["jml"]; $foto=$row["foto"]; } ?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Document</title> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> </head> <body> <div class="topnav"> <b><a href="home.php">Home</a></b> <b><a href="login1.php">Login</a></b> <b><a href="logout.php">Logout</a></b> </div> <center> <div class="panjang"> <h1 align="left" style="margin-bottom:30px">Edit Data Barang</h1> <form action="updBrg.php" method="post" enctype="multipart/form-data"> <table class="table table-dark table-hover cols-6 rows-6"> <tr> <td>ID</td> <td>:</td> <td><input type="text" name="tid" id="tid" value="<?= $id; ?>" readonly></td> <td></td> </tr> <tr> <td>Nama Barang</td> <td>:</td> <td><input type="text" name="tnama" id="tnama" value="<?= $nama; ?>"></td> <td></td> </tr> <tr> <td>Harga</td> <td>:</td> <td><input type="text" name="thrg" id="thrg" value="<?= $hrg; ?>"></td> <td></td> </tr> <tr> <td>Jumlah Stok</td> <td>:</td><td><input type="text" name="tjml" id="tjml" value="<?= $jml; ?>"></td> <td></td> </tr> <tr> <td>Foto</td> <td>:</td> <td><input type="file" name="foto" id="foto"></td> <td><input type="hidden" name="foto_lama" id="foto_lama" value="<?= $foto; ?>"></td> </tr> <tr> <td><img src="img1/<?php echo $foto; ?>" width="150px" height="120px"></td> <td></td> <td><input type="checkbox" name="ubah_foto" id="ubah_foto" value="true">Ceklis Jika ingin mengubah foto</td> <td></td> </tr> </table> <input type="submit" value="update"> </form> </div> </center> </body> </html>