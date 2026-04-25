<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Aplikasi Pengelolaan Buku</title></head>
<body>
    <h2>Daftar Buku</h2>
    <a href="tambah.php">Tambah Buku Baru</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>Judul</th><th>Penulis</th><th>Tahun Terbit</th><th>Harga</th><th>Stok</th><th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM buku";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['ID']."</td>";
            echo "<td>".$row['Judul']."</td>";
            echo "<td>".$row['Penulis']."</td>";
            echo "<td>".$row['Tahun_Terbit']."</td>";
            echo "<td>".$row['Harga']."</td>";
            echo "<td>".$row['stok']."</td>";
            echo "<td>
                    <a href='edit.php?id=".$row['ID']."'>Edit</a> | 
                    <a href='hapus.php?id=".$row['ID']."' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>