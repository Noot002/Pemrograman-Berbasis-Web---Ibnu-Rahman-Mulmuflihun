<?php
include 'koneksi.php';
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM buku WHERE ID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><title>Edit Buku</title></head>
<body>
    <h2>Edit Data Buku</h2>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['ID'] ?>">
        <label>Judul:</label><br>
        <input type="text" name="judul" value="<?= $data['Judul'] ?>" required><br>
        <label>Penulis:</label><br>
        <input type="text" name="penulis" value="<?= $data['Penulis'] ?>" required><br>
        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun" value="<?= $data['Tahun_Terbit'] ?>" required><br>
        <label>Harga:</label><br>
        <input type="number" step="0.01" name="harga" value="<?= $data['Harga'] ?>" required><br>
        <label>Stok:</label><br>
        <input type="number" name="stok" value="<?= $data['stok'] ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>