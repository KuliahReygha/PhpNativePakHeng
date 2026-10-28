<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function tampilwaktu() {
            var waktu = new Date();

            var sh = waktu.getHours() + "";
            var sm = waktu.getMinutes() + "";
            var ss = waktu.getSeconds() + "";

            document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
        }
    </script>
</head>

<body onload="tampilwaktu();setInterval('tampilwaktu()',1000);">
    <span id="clock"></span>

    <?php
    $hari = date('l');

    if ($hari == "Sunday") {
        echo "Minggu";
    } else if ($hari == "Monday") {
        echo "Senin";
    } else if ($hari == "Tuesday") {
        echo "Selasa";
    } else if ($hari == "Wednesday") {
        echo "Rabu";
    } else if ($hari == "Thursday") {
        echo "Kamis";
    } else if ($hari == "Friday") {
        echo "Jumat";
    } else if ($hari == "Saturday") {
        echo "Sabtu";
    }

    echo " ";
    $tgl = date('d');
    echo $tgl;
    echo " ";
    $bulan = date('F');

    if ($bulan == "January") {
        echo "Januari";
    } else if ($bulan == "February") {
        echo "Februari";
    } else if ($bulan == "March") {
        echo "Maret";
    } else if ($bulan == "April") {
        echo "April";
    } else if ($bulan == "May") {
        echo "Mei";
    } else if ($bulan == "June") {
        echo "Juni";
    } else if ($bulan == "July") {
        echo "Juli";
    } else if ($bulan == "August") {
        echo "Agustus";
    } else if ($bulan == "September") {
        echo "September";
    } else if ($bulan == "October") {
        echo "Oktober";
    } else if ($bulan == "November") {
        echo "November";
    } else if ($bulan == "December") {
        echo "Desember";
    }
    echo " ";
    $tahun = date('Y');
    echo $tahun;
    ?>
</body>

</html>