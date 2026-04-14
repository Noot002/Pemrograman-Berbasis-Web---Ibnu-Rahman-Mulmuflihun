<form method="POST">
    <label>Angka Awal:</label>
    <input type="number" name="dari" required>
    <br>
    
    <label>Angka Akhir:</label>
    <input type="number" name="sampai" required>
    <br>
    
    <button type="submit" name="submit">Tampilkan</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $dari = $_POST['dari'];
    $sampai = $_POST['sampai'];
    
    echo "Bilangan genap dari <b>$dari</b> sampai <b>$sampai</b>:<br>";
    
    for ($i = $dari; $i <= $sampai; $i += 2) {
        echo $i . "<br>";
    }
}
?>