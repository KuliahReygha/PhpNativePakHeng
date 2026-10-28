<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$i = 1;
while($i <= 3){
    echo "Angka : $i <br>";
    $i++;
}
echo "<hr>";
$a = 1;
while($a <= 3){
    $b = 1;
    while($b <= 2){
         echo "Nilai A = $a Nilai B = $b <br>";
        $b++;
    }
     $a++;
}
echo "<hr>";
$hitung = 0;
$bilangan = 3;

while ($bilangan <= 127) {
    $hitung++;
    $bilangan += 3;
}

echo "Hitung = 0 <br>";
echo "Bilangan = 3 <br>";
echo "Jumlah Bilangnan <= 127 <br>";
echo "Banyaknya bilangan bulat adalah $hitung";

?>
    
</body>
</html>