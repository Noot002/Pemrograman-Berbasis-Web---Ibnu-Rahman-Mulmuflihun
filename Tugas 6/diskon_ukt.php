<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon UKT</title>
</head>
<body>
    <?php
    $npm = "12345xxxx";
    $nama = "AL BIN BITCOIN";
    $prodi = "SAIN DATA";
    $semester = 9;
    $biaya_ukt = 5900000;

    $persentase_diskon = 0;

    if ($biaya_ukt >= 5000000 && $semester > 8) {
        $persentase_diskon = 15;
    } elseif ($biaya_ukt >= 5000000) {
        $persentase_diskon = 10;
    }

    $nominal_diskon = $biaya_ukt * ($persentase_diskon / 100);
    $total_bayar = $biaya_ukt - $nominal_diskon;

    echo "NPM : " . $npm . "<br>";
    echo "NAMA : " . $nama . "<br>";
    echo "PRODI : " . $prodi . "<br>";
    echo "SEMESTER : " . $semester . "<br>";
    echo "BIAYA UKT : Rp. " . number_format($biaya_ukt, 0, ',', '.') . ",-<br>";
    echo "DISKON : " . $persentase_diskon . "% <br>";
    echo "YANG HARUS DIBAYAR : Rp. " . number_format($total_bayar, 0, ',', '.') . ",-";
    ?>
</body>
</html>