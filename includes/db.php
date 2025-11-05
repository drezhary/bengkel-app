<?php

$conn = mysqli_connect('localhost', 'root', '', 'bengkel_motor');

if (!$conn) {
    die("Koneksi gagal :" . mysqli_connect_error());
}
// echo "koneksi berhasil";
