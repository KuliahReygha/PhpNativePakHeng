<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   for ($i = 0; $i <= 10; $i++) {
    echo "ini perulangan ke: $i <br>";
}
echo "<hr>";



   for ($i = 10; $i > 0; $i--) {
    echo $i." - "  ;
}
echo "<hr>";


   for ($i = 1; $i < 10; $i++) {
    if($i==3){
        continue;
    }
    echo $i;
}

echo "<hr>";


$orang = array("rehan","rishqi","afdal","muti");
foreach ($orang as $isi){
    echo "$isi <br>";
}

echo "<hr>";

$menu = array("Website" => 1500000,"Aplikasi" => 2500000,"Hosting" => 5000000);
foreach ($menu as $isi => $value){
    echo "$isi : Rp ". number_format($value,0,',','.')."<br>";
}


    ?>
    
</body>
</html>