<?php

session_start();

$id_produk = $_POST['id_produk'];

$user_id = $_SESSION['id'];

include("../koneksi.php");
$query = mysqli_query($koneksi, "insert into cart values (null, $user_id, now())");

$cart_id = mysqli_insert_id($koneksi);

$query2 = mysqli_query($koneksi, "insert into cart_items values (null, $cart_id, $id_produk, now)");