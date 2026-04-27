<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("UPDATE mahasiswa SET nim=?, nama=?, jurusan=?, angkatan=?, ipk=? WHERE id=?");
    $stmt->bind_param("sssidi", $_POST['nim'], $_POST['nama'], $_POST['jurusan'], $_POST['angkatan'], $_POST['ipk'], $_POST['id']);

    if ($stmt->execute()) {
        $_SESSION['pesan'] = "Data berhasil diperbarui!";
        $_SESSION['tipe_pesan'] = "success";
    } else {
        $_SESSION['pesan'] = "Gagal memperbarui data: " . $conn->error;
        $_SESSION['tipe_pesan'] = "danger";
    }
    $stmt->close();
    $conn->close();
    header("Location: index.php");
}
?>