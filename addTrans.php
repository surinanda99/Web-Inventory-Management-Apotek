<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .topnav {
            overflow: hidden;
            background-color: lightgrey;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            opacity: 0.7;
        }
        .topnav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 16.5px 40px;
            text-decoration: none;
        }
        .topnav a:hover {
            background-color: grey;
            color: black;
        }
        .panjang {
            width: 30%;
            margin-top: 100px;
        }
    </style>
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
            <h1 align="left" style="margin-bottom: 30px;">Input data transaksi</h1>
            <form action="insTrans.php" method="post" enctype="multipart/form-data">
                <table class="table bg-warning cols-6 rows-6">
                    <tr>
                        <td>Id</td>
                        <td>:</td>
                        <td><input type="text" name="tid" id="tid"></td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td>:</td>
                        <td><input type="text" name="tnama" id="tnama"></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>:</td>
                        <td><input type="text" name="tjml" id="tjml"></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td><input type="date" name="ttgl" id="ttgl"></td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td>:</td>
                        <td><input type="text" name="thrg" id="thrg"></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td><input type="text" name="tket" id="tket"></td>
                    </tr>
                    <tr>
                        <td>Bukti</td>
                        <td>:</td>
                        <td><input type="file" name="bukti" id="bukti"></td>
                    </tr>

                </table>
                <input type="submit" name="simpan" id="simpan" value="Simpan">
            </form>
        </div>
    </center>
</body>
</html>
