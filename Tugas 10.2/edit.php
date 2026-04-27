<?php
include 'koneksi.php';
$stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE id = ?");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Edit Data Mahasiswa</h2>
    <form action="proses_edit.php" method="POST" class="w-50">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <div class="mb-3"><label>NIM</label><input type="text" name="nim" class="form-control" value="<?= $data['nim']; ?>" required></div>
        <div class="mb-3"><label>Nama</label><input type="text" name="nama" class="form-control" value="<?= $data['nama']; ?>" required></div>
        <div class="mb-3"><label>Jurusan</label><input type="text" name="jurusan" class="form-control" value="<?= $data['jurusan']; ?>" required></div>
        <div class="mb-3"><label>Angkatan</label><input type="number" name="angkatan" class="form-control" value="<?= $data['angkatan']; ?>" required></div>
        <div class="mb-3"><label>IPK</label><input type="number" step="0.01" name="ipk" class="form-control" value="<?= $data['ipk']; ?>" required></div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="index.php" class="btn btn-secondary">Batal</a>
    </form>
</body>
</html>