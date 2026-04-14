<form method="POST" action="">
    <label>Nama Hewan:</label><br>
    <input type="text" name="hewan_input">
    <button type="submit" name="submit">Proses</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $input = $_POST['hewan_input'];
    $hewan = explode(",", $input);
    
    echo "Daftar Hewan Anda:<br>";
    foreach ($hewan as $h) {
        echo "- " . trim($h) . "<br>"; 
    }
}
?>