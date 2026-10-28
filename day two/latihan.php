<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 
$angka = 12;

switch ($angka){
case $angka <= 5 :
    echo "Angka Berapa di range 1 - 5";

break;
case $angka > 5 && $angka <= 10 :
    echo "Angka Berapa di range 6 - 10";
break;

case $angka > 10 && $angka <= 15 :
    echo "Angka Berapa di range 11 - 15";
break;

default :
echo "Angka diluar jangkauan";
break;


}

?>
    
</body>
</html>