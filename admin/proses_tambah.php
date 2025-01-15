<?php

include ("../koneksi.php");

$id = $_POST["id"];
$nama = $_POST["nama"];
$deskripsi = $_POST["deskripsi"];
$harga = $_POST["harga"];

$nama_foto = $_FILES["foto"]["name"];
$lokasi_tmp = $_FILES["foto"]["tmp_name"];

$query = mysqli_query($koneksi, "INSERT INTO tambahproduk (id, nama, deskripsi, harga, foto) VALUES ('$id', '$nama', '$deskripsi', '$harga', '$nama_foto')");

move_uploaded_file($lokasi_tmp, "../asset/FotoProduk/$nama_foto");
