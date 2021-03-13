<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $jarak = 64.5;
    $ubahJarak = $jarak * 1000;
    // echo "$ubahJarak<br>";

    $menit1 = 23;
    $ubahMenit1 = $menit1 * 60;
    $kecepatan1 = 3;
    $jarak1 = $kecepatan1 * $ubahMenit1;
    // echo "$jarak1<br>";

    $menit2 = 12;
    $ubahMenit2 = $menit2 * 60;
    $kecepatan2 = 5;
    $jarak2 = $kecepatan2 * $ubahMenit2;
    // echo "$jarak2<br>";

    $totalJarak = $jarak1 + $jarak2;


    $sisaJarak = $ubahJarak - $totalJarak;

    // echo "$sisaJarak<br>";

    $sisaWaktu = ($sisaJarak / 2) + $ubahMenit1 + $ubahMenit2;

    // echo "$sisaWaktu<br>";

    $jam = floor($sisaWaktu / 3600);
    $menit = floor(($sisaWaktu / 60) % 60);
    $detik = $sisaWaktu % 60;

    echo "{$jam} jam {$menit} menit {$detik} detik";


    ?>
</body>

</html>