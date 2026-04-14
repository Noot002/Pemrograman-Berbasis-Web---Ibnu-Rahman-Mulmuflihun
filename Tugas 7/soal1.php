<form method="POST">
    <label>Jumlah Roda</label>
    <input type="number" name="roda">
    <button type="submit" name="submit">Cek Kendaraan</button>
</form>

<?php
if (isset ($_POST['submit'])) {
    $jumlah_roda = $_POST['roda'];
    echo "Jumlah roda: $jumlah_roda <br>";

    switch ($jumlah_roda) {
        case 2:
            echo "Jenis Kendaraan: Sepeda Motor";
            break;
        case 3:
            echo "Jenis Kendaraan: Bajaj";
            break;
        case 4:
            echo "Jenis Kendaraan: Mobil";
            break;
        case 6:
            echo "Jenis Kendaraan: Truk";
            break;
        default:
            echo "Jenis Kendaraan tidak terdaftar";
    }
}
?>