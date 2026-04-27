<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Tambah Data Mahasiswa</h2>
    <form action="proses_tambah.php" method="POST" class="w-50">
        <div class="mb-3"><label>NIM</label><input type="text" name="nim" class="form-control" required></div>
        <div class="mb-3"><label>Nama</label><input type="text" name="nama" class="form-control" required></div>
        <div class="mb-3"><label>Jurusan</label><input type="text" name="jurusan" class="form-control" required></div>
        <div class="mb-3"><label>Angkatan</label><input type="number" name="angkatan" class="form-control" required></div>
        <div class="mb-3"><label>IPK</label><input type="number" step="0.01" name="ipk" class="form-control" required></div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Batal</a>
    </form>
</body>
</html>