<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hitung Nilai Akhir Mahasiswa</h1>
    <form action="proses_Form.php" method="POST">
        <label for="">Nama Mahasiswa :</label><br>
        <input type="text" name="nama"><br>
        <label for="">Mata Kuliah :</label><br>
        <input type="text" name="matkul"><br>
        <label for="">Nilai Absen :</label><br>
        <input type="text" name="nlabs"><br>
        <label for="">Nilai Tugas :</label><br>
        <input type="text" name="nltgs"><br>
        <label for="">Nilai Uts :</label><br>
        <input type="text" name="nluts"><br>
        <label for="">Nilai Uas :</label><br>
        <input type="text" name="nluas"><br>
        <br>
        <button type="submit">Hitung</button>
    </form>

</body>

</html>