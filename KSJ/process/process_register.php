<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

// Menangkap request
$username = $_POST['username'];
$password = md5($_POST['password']);

$kuery = mysqli_query($koneksi, "SELECT username from user WHERE username = '$username' ");
if (mysqli_num_rows($kuery) != 0) {
    echo "username telah ada";
    header("location: " . BASE_URL);
} else {
    $query = mysqli_query($koneksi, "INSERT INTO user (id, username, password) VALUES ('','$username','$password')");
    "success";
    header("location: " . BASE_URL . 'dashboard.php?page=index');
}

