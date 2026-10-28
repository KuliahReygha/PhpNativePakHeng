<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $i = 0;

    do {
        $j = 0;
        do {
            echo $i;
            $j++;
        } while ($j < 10);
        $i++;
        echo "<br>";
    } while ($i < 10)
    ?>

</body>

</html>