<!DOCTYPE html>
<html>
<head><title>Tambah Buku</title></head>
<body>
    <h2>Tambah Data Buku</h2>
    <form action="proses_tambah.php" method="POST">
        <label>Judul:</label><br>
        <input type="text" name="judul" required><br>
        <label>Penulis:</label><br>
        <input type="text" name="penulis" required><br>
        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun" required><br>
        <label>Harga:</label><br>
        <input type="number" step="0.01" name="harga" required><br>
        <label>Stok:</label><br>
        <input type="number" name="stok" required><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>