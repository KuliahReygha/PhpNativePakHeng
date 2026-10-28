<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
 $gaji = 1000000;
 $pajak = 0.1;
 $totalgaji = $gaji - ($pajak * $gaji) ;

    echo "Gaji sebelum pajak = Rp. " . number_format($gaji,0,'','.') ."</br>" ;
    echo "Gaji yang di bawa pulang = Rp. " . number_format($totalgaji,0,'','.') ;

?>
    
</body>
</html>