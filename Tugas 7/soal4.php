<form method="POST">
    <label>Masukkan Angka:</label>
    <input type="number" name="angka">
    <button type="submit" name="submit">Cek Angka</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $angka = $_POST['angka'];
    
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    
    echo "Angka $angka adalah bilangan $hasil.";
}
?>