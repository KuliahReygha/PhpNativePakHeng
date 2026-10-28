<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$a = true;
$b = false;


$c = $a && $b;
printf("%b && %b = %b",$a,$b,$c);

echo "<hr>";

$c = $a || $b;
printf("%b || %b = %b",$a,$b,$c);

echo "<hr>";




?>
    
</body>
</html>