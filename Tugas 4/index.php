<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
    <style>
        body{font-family: serif;}
        .container{width: 475px;}
    </style>
</head>
<body>
    <div class="container">
        <h2>Perhitungan Total Pembelian (Dengan Array)</h2>
        <hr>
        
        <?php
        define('PAJAK', 0.10);
        $barang=[
            "nama" => "Keyboard",
            "harga" => 150000
        ];
        
        $jumlah_beli = 2;
        
        $total_harga_awal = $barang["harga"] * $jumlah_beli;
        $nilai_pajak = $total_harga_awal * PAJAK;
        $total_bayar = $total_harga_awal + $nilai_pajak;

        function formatRupiah($angka){
            return "Rp " . number_format($angka, 0, ',', '.');
        }
        
        echo "Nama Barang: " . $barang["nama"] . "<br>";
        echo "Harga Satuan: " . formatRupiah($barang["harga"]) . "<br>";
        echo "Jumalh Beli: " . $jumlah_beli . "<br>";
        echo "Total Harga (Sebelum Pajak): " . formatRupiah($total_harga_awal) . "<br>";
        echo "Pajak (10%): " . formatRupiah($nilai_pajak) . "<br>";
        echo "<b>Total Bayar: " . formatRupiah($total_bayar) . "</b>";
        ?>
    </div>
</body>
</html>