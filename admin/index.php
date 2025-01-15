<?php
session_start();
include ("../koneksi.php");

$query = mysqli_query($koneksi, "SELECT * FROM tambahproduk");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>
<body>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <div class="container d-flex gap-5 mt-5">
        <?php
            while($data = mysqli_fetch_array($query)):
        ?>
        <div class="card" style="width: auto;">
            <img src="../asset/FotoProduk/<?php echo $data['foto'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nama : <?php echo $data["nama"] ?></h5>
                <h6 class="card-title">Deskripsi : <?php echo $data["deskripsi"] ?></h6>
                <h6 class="card-title">Harga : <?php echo $data["harga"] ?></h6>

                <a href="detail.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">Detail</a>
            </div>
        </div>
        <?php endwhile ?>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>