<?php
    include("../koneksi.php");

    // if(isset($_GET['id'])){
    //     header("Location: index.php");
    // }

    $id = $_GET["id"];
    $query = mysqli_query($koneksi, "select * from tambahproduk where id=$id");

    $dataProduct = mysqli_num_rows($query);
    if($dataProduct == 0){
        echo "<h1>Data Product Tidak Ditemukan</h1>";
        die();
    }

    $data = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', 
            Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .card {
            border: 1px black;
            border: 3px solid #333;
            border-radius: 8px;
            width: 1000px;
            display: flex;
            
        }
        h1 {
            font-size: 30px;
        }
        h2 {
            font-size: 20px;
        }
        h3 {
            font-size: 15px;
        }
        .kartu{
            display: flex;
        }
        .deskripsi{
            margin: 10px;
        }
        .id_produk{
            width: 100px;
            height: 15px;
        }
    </style>
</head>
<body>
    <main class="card">
        <div class="kartu">
            <img src="../asset/FotoProduk/<?= $data['foto'] ?>"width = "400px" class="fotoproduk">
            <div class="deskripsi">
                <h1 class="card-title">Nama : <?= $data["nama"] ?></h1>
                <h3 class="card-title">Harga : <?= $data["harga"] ?></h3>
                <p class="card-title">Deskripsi : <?= $data["deskripsi"] ?></h3>
            </div>
        </div>
        <form action="proses_keranjang.php" method="post">
            <input type="hidden" name="id_produk" value="<?=$id?>">
            <button type="submit">Keranjang</button>
        </form>
    </main>
</body>
</html>