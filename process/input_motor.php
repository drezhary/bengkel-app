<?php
include "../includes/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pemilik = $_POST['nama_pemilik'];
    $no_polisi = $_POST['no_polisi'];
    $tipe_motor = $_POST['tipe_motor'];
    $keluhan = $_POST['keluhan'];
    $status_servis = "Menunggu";
    $tanggal_masuk = date("Y:m:d");
    $tanggal_selesai = date("Y:m:d");
    $id_user = 1;
    $created_at = date("Y-m-d H:i:s");
} else {
}

$stmt = $conn->prepare("INSERT INTO motor_servis(nama_pemilik,no_polisi,tipe_motor,keluhan,status_servis,
        tanggal_masuk,tanggal_selesai,id_user,created_at)
        VALUES (?,?,?,?,?,?,?,?,?)");
$stmt->bind_param(
    "sssssssis",
    $nama_pemilik,
    $no_polisi,
    $tipe_motor,
    $keluhan,
    $status_servis,
    $tanggal_masuk,
    $tanggal_keluar,
    $id_user,
    $created_at
);

if ($stmt->execute()) {
    echo "
    <script>
    alert('Data berhasil ditambahkan!');
    document.location.href = '../pages/data_motor.php';
    </script>
    ";
} else {
    echo "Error : ". $stmt->error;
}

$stmt->close();
$conn->close();
