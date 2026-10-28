<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hitung Nilai Akhir Mahasiswa</h1>
    <?php

    if (isset($_POST['nama'])) {

        $nama = $_POST['nama'];
        $matkul = $_POST['matkul'];
        $nlabs = $_POST['nlabs'];
        $nltgs = $_POST['nltgs'];
        $nluts = $_POST['nluts'];
        $nluas = $_POST['nluas'];

        $nlabs = $nlabs * 0.1;
        $nltgs = $nltgs * 0.2;
        $nluts = $nluts * 0.3;
        $nluas = $nluas * 0.4;

        $nlAkhir = $nlabs + $nltgs + $nluts + $nluas;

        if ($nlAkhir > 80) {
            $grade = "A";
        } else if ($nlAkhir > 70) {
            $grade = "B";
        } else if ($nlAkhir > 50) {
            $grade = "C";
        } else if ($nlAkhir > 40) {
            $grade = "D";
        } else {
            $grade = "E";
        }


        echo "Nama Mahasiswa : " . htmlspecialchars($nama) . "<br>";
        echo "Mata Kuliah : " . htmlspecialchars($matkul) . "<br>";
        echo "<br>";
        echo "Nilai Absen : <b> $nlabs </b>  <br>";
        echo "Nilai Tugas : <b> $nltgs </b>  <br>";
        echo "Nilai UTS : <b> $nluts </b>  <br>";
        echo "Nilai UAS : <b> $nluas </b>  <br>";
        echo "<br>";
        echo "<b>Nilai Akhir :   $nlAkhir </b> <br>";
        echo "<br>";
        echo "<b>Grade : $grade </b> <br>";

        echo "<h4> <a href='form.php'>Kembali</a></h4>";
    }
    ?>
</body>

</html>