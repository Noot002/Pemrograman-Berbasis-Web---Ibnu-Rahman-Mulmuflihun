<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("INSERT INTO mahasiswa (nim, nama, jurusan, angkatan, ipk) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssid", $_POST['nim'], $_POST['nama'], $_POST['jurusan'], $_POST['angkatan'], $_POST['ipk']);

    if ($stmt->execute()) {
        $_SESSION['pesan'] = "Data berhasil ditambahkan!";
        $_SESSION['tipe_pesan'] = "success";
    } else {
        $_SESSION['pesan'] = "Gagal menambah data: " . $conn->error;
        $_SESSION['tipe_pesan'] = "danger";
    }
    $stmt->close();
    $conn->close();
    header("Location: index.php");
}
?>