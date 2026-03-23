<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 - Latihan Nilai</title>
    <style>
        label {
            display: inline-block;
            width: 50px;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <label>Nama</label>: <input type="text" name="nama"><br>
        <label>Nila:</label>: <input type="number" name="nilai"><br>
        <input type="submit" value="Proses" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];

        if ($nilai >= 85 && $nilai <= 100) {
            $predikat = "A";
        } elseif ($nilai >= 75 && $nilai <= 84) {
            $predikat = "B";
        } elseif ($nilai >= 65 && $nilai <= 74) {
            $predikat = "C";
        } elseif ($nilai >= 50 && $nilai <= 64) {
            $predikat = "D";
        } elseif ($nilai >= 0 && $nilai <= 49) {
            $predikat = "E";
        } else {
            $predikat = "Tidak Valid";
        }

        $status = ($nilai >= 65) ? "Lulus" : "Tidak Lulus";

        echo "<br>Nama : $nama";
        echo "<br>Nilai : $nilai";
        echo "<br>Predikat : $predikat";
        echo "<br>Status : $status";
    }
    ?>
</body>
</html>