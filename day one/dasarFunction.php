<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
function perkenalan(){
echo "Assalamualaikum,<br/>";
echo "Perkenalkan nama saya Dwi Reygha <br/>";
echo "Senang berkenalan dengan anda <br/>";
}

perkenalan();
echo "<hr/>";

perkenalan();


function perkenalanParameter($nama,$salam){
echo $salam . ",<br/>";
echo "Perkenalkan nama saya $nama <br/>";
echo "Senang berkenalan dengan anda <br/>";
}
echo "<hr/>";
perkenalanParameter("Rishqi","Selamat Pagi");

function perkenalanParameterDefault($nama,$salam="Assalamualaikum"){
echo $salam . ",<br/>";
echo "Perkenalkan nama saya $nama <br/>";
echo "Senang berkenalan dengan anda <br/>";
}
echo "<hr/>";
perkenalanParameterDefault("Rishqi");






function hitungUmur($thn_lahir,$thn_sekarang){
$umur =  $thn_sekarang - $thn_lahir ;
return $umur;
}
echo "<hr/>";
echo "Umur saya Adalah " .hitungUmur(2007,2026)." tahun"; 









function perkenalanGabungan($nama,$salam="Assalamualaikum"){
echo $salam . ",<br/>";
echo "Perkenalkan nama saya $nama <br/>";

echo "Saya berusia ". hitungUmur(2007,2026) . " tahun <br/>";
echo "Senang berkenalan dengan anda <br/>";

}
echo "<hr/>";
perkenalanGabungan("Reygha")



?>

    
</body>
</html>