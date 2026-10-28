<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h1>String Functions in PHP</h1>";
    $text = "Hello World! PHP is amazing.";

    echo "1. Word Count :" . str_word_count($text) .
        "<br>";
    echo "2. Length Of The String :" . strlen($text) .
        "<br>";
    echo "3. Reversed String :" . strrev($text) .
        "<br>";
    echo "4. Position of 'PHP' :" . strpos($text, "PHP") .
        "<br>";
    echo "5. Replace 'Amazing' with 'Awesome' :" . str_replace("amazing", "Awesome", $text) .
        "<br>";
    echo "6. Capitalize each word :" . ucwords($text) .
        "<br>";
    echo "7. Uppercase :" . strtoupper($text) .
        "<br>";
    echo "8. Lowercase :" . strtolower($text) .
        "<br>";
    echo "9. Repeat 'PHP' :" . str_repeat("PHP", 3) .
        "<br>";
    echo "10. Compare 'PHP' and 'PHP' :" . strcmp("PHP", "PHP") .
        "<br>";
    echo "Compare 'PHP' and 'php' :" . strcmp("PHP", "php") .
        "<br>";
    echo "11. Substring (6 to 11) :" . substr($text, 6, 5) .
        "<br>";
    $splitted = str_split($text, 5);
    echo "12. Split String into chunks of 5  :" . print_r($splitted) .
        "<br>";
    echo "13. Shuffled string  :" . str_shuffle($text) .
        "<br>";
    $extraSpaces = " Trim me! ";
    echo "14. Trimmed string  :" . trim($extraSpaces) .
        "<br>";
    echo "15. Rtrim result :  :" . rtrim($extraSpaces) .
        "<br>";
    echo "16. Ltrim result :" . ltrim($extraSpaces) .
        "<br>";
    echo "17. Chop result :" . chop($extraSpaces) .
        "<br>";
    echo "18. Chunked String (every 4 characters) :" . chunk_split($text, 4) .
        "<br>";
    echo "19. Tanggal Default :" . date("l.Y.m.d") .
        "<br>";
    date_default_timezone_set("Asia/Jakarta");
    echo "20. Tanggal Jakarta :" . date("l.d.F.Y") .
        "<br>";
    echo "21. Jam :" . date("H:i:s") .
        "<br>";
    ?>

</body>

</html>