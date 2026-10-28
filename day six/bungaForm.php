<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="bungaForm.php" method="POST">
        <label for="">Saldo Awal :</label><br>
        <input type="text" name="sawal"><br>
        <label for="">Bunga :</label><br>
        <input type="text" name="bunga"><br>
        <label for="">Lama Bulan :</label><br>
        <input type="text" name="labul"><br>
        <br>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if (isset($_POST['sawal'])) {
        $sawal = $_POST['sawal'];
        $bunga = $_POST['bunga'];
        $labul = $_POST['labul'];


        $buhir = $sawal * ($bunga / 100) * $labul;
        $totalsaldo = $sawal + $buhir;


        echo "Saldo Awal :" . $sawal . "<br>";
        echo "Bunga :" . $bunga . "% <br>";
        echo "Lama Bulan :" . $labul . "<br>";

        echo "Saldo Akhir Selama " . $labul . " Bulan adalah : " . $totalsaldo;
    }
    ?>
</body>

</html>