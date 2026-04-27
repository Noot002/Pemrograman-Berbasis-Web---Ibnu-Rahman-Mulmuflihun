<?php
session_start();
include 'koneksi.php';

if (isset($_GET['id'])) {
    $stmt = $conn->prepare("DELETE FROM mahasiswa WHERE id = ?");
    $stmt->bind_param("i", $_GET['id']);

    if ($stmt->execute()) {
        $_SESSION['pesan'] = "Data berhasil dihapus!";
        $_SESSION['tipe_pesan'] = "success";
    } else {
        $_SESSION['pesan'] = "Gagal menghapus data: " . $conn->error;
        $_SESSION['tipe_pesan'] = "danger";
    }
    $stmt->close();
    $conn->close();
}
header("Location: index.php");
?>