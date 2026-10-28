<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if (isset($_POST['nama'])) {

        $nama = $_POST['nama'];
        echo "<b>Halo, </b>" . htmlspecialchars($nama);
    }
    ?>

    <a href="Fungsi_Post.php"> <br> <br>
        Kembali</a>
</body>

</html> 