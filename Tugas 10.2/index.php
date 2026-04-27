<?php
session_start();
include 'koneksi.php';

// Konfigurasi Pagination
$limit = 5; 
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Fitur Pencarian
$search = isset($_GET['search']) ? $_GET['search'] : '';
$search_param = "%" . $search . "%";

// Hitung total data (Prepared Statement)
$stmt_count = $conn->prepare("SELECT COUNT(*) as total FROM mahasiswa WHERE nama LIKE ?");
$stmt_count->bind_param("s", $search_param);
$stmt_count->execute();
$total_data = $stmt_count->get_result()->fetch_assoc()['total'];
$total_pages = ceil($total_data / $limit);

// Ambil data dengan Limit & Offset (Prepared Statement)
$stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE nama LIKE ? LIMIT ? OFFSET ?");
$stmt->bind_param("sii", $search_param, $limit, $offset);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="mb-4">Aplikasi Data Mahasiswa</h2>

    <!-- Menampilkan Pesan -->
    <?php if (isset($_SESSION['pesan'])): ?>
        <div class="alert alert-<?= $_SESSION['tipe_pesan']; ?> alert-dismissible fade show">
            <?= $_SESSION['pesan']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php session_unset(); ?>
    <?php endif; ?>

    <!-- Form Pencarian & Tombol Tambah -->
    <div class="d-flex justify-content-between mb-3">
        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
        <form method="GET" action="" class="d-flex">
            <input type="text" name="search" class="form-control me-2" placeholder="Cari Nama..." value="<?= htmlspecialchars($search); ?>">
            <button type="submit" class="btn btn-success">Cari</button>
        </form>
    </div>

    <!-- Tabel Data -->
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th><th>NIM</th><th>Nama</th><th>Jurusan</th><th>Angkatan</th><th>IPK</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = $offset + 1;
            while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($row['nim']); ?></td>
                <td><?= htmlspecialchars($row['nama']); ?></td>
                <td><?= htmlspecialchars($row['jurusan']); ?></td>
                <td><?= htmlspecialchars($row['angkatan']); ?></td>
                <td><?= htmlspecialchars($row['ipk']); ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <!-- Pagination -->
    <nav>
        <ul class="pagination">
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item <?= ($i == $page) ? 'active' : ''; ?>">
                    <a class="page-link" href="?page=<?= $i; ?>&search=<?= urlencode($search); ?>"><?= $i; ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>