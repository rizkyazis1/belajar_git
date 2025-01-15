<?php
session_start();
// kalau dia tidak login
//     if(!isset($_SESSION)){
//         header('location:../login.php');
//     }

//     if($_SESSION['role'] != "admin"){
//         echo "Anda tidak memiliki akses";
//         die();
//     }

// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .brand {
            color: black;
            color: #d1c2b5;
            font-weight: bold;
        }
        
    </style>
</head>
<body>
    <div class="brand">Cemilan77</div>
    <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
            <div>
                Id :
                <input type="text" name="id" placeholder="Masukkan Id..."/>
            </div>

            <div>
                Nama :
                <input type="text" name="nama" placeholder="Masukkan Nama..."/>
            </div>

            <div>
                Deskripsi :
                <input type="text" name="deskripsi" placeholder="Deskripsi..."/>
            </div>

            <div>
                Harga :
                <input type="text" name="harga" placeholder="Masukkan Harga..." />
            </div>

            <div>
                Foto :
                <input type="file" name="foto" />
            </div>

            <input type="submit" name="simpan" value="Simpan">
    </form>
</body>
</html>