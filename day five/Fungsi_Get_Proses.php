<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if (isset($_GET['nama'])) {

        $nama = $_GET['nama'];
        echo "<b>Halo, </b>" . htmlspecialchars($nama);
    }
    ?>

    <a href="Fungsi_Get.php"> <br> <br>
        Kembali</a>
</body>

</html>