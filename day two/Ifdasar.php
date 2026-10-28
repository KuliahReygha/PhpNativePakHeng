<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Dasar</title>
</head>
<body>
    <?php 
$nilai = 100;
if($nilai == 100){
    echo "Nilai Siswa : ". $nilai ." diatas 75 <br>";
}



$nilai2 = 60;

if($nilai2 >= 75){
      echo "Nilai Siswa : ". $nilai2 ." diatas 75 <br>";
}else {
      echo "Nilai Siswa : ". $nilai2 ." di bawah 75 <br>";
}




$nilai3 = 70;

if($nilai3 >= 75){
      echo "Nilai Siswa : ". $nilai3 ." diatas 75 <br>";
}else if($nilai3 >= 60) {
      echo "Nilai Siswa : ". $nilai3 ." di bawah 75 dan di atas 60 <br>";
}


    ?>
    
</body>
</html>