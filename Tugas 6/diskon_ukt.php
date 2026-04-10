<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon UKT</title>
</head>
<body>
    <h2>FORM PEMBAYARAN UKT MAHASISWA</h2>
    <form method="post" action="">
        NPM: <input type="text" name="npm" required><br><br>
        NAMA: <input type="text" name="nama" required><br><br>
        PRODI: <input type="text" name="prodi" required><br><br>
        SEMESTER: <input type="number" name="semester" required><br><br>
        BIAYA UKT: <input type="number" name="biaya_ukt" required><br><br>
        <input type="submit" name="proses" value="Hitung Pembayaran">
    </form><br>

    <?php
    if (isset($_POST['proses'])) {
        $npm = $_POST['npm'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $semester = $_POST['semester'];
        $biaya_ukt = $_POST['biaya_ukt'];

        $persentase_diskon = 0;

        if ($biaya_ukt >= 5000000 && $semester > 8) {
            $persentase_diskon = 15;
        } elseif ($biaya_ukt >= 5000000) {
            $persentase_diskon = 10;
        }

        $nominal_diskon = $biaya_ukt * ($persentase_diskon / 100);
        $total_bayar = $biaya_ukt - $nominal_diskon;

        echo "NPM : " . $npm . "<br><br>";
        echo "NAMA : " . $nama . "<br><br>";
        echo "PRODI : " . $prodi . "<br><br>";
        echo "SEMESTER : " . $semester . "<br><br>";
        echo "BIAYA UKT : Rp. " . number_format($biaya_ukt, 0, ',', '.') . ",-<br><br>";
        echo "DISKON : " . $persentase_diskon . "% <br><br>";
        echo "YANG HARUS DIBAYAR : Rp. " . number_format($total_bayar, 0, ',', '.') . ",-";
    }
    ?>
</body>
</html>