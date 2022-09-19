<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>

<body>
    <p style="color: red;"></p>
    Hai
    <hr>
    <?php
    echo "Saya nyobaik";
    printf('Tgl: %s', date('D F Y'));
    echo '<br>';
    $mydata = 123;
    echo 'datakU: ' . $mydata;
    echo '<br>';
    $warna = 'blue';

    echo '<p style="color: '. $warna .';">aaaa</p>';
    // echo phpinfo();
    echo '<br>';

    $myarr = [
        'aaa',
        '<br>',
        'Panjang dari ABC: '. strlen('abc'),
        'cari "Halo": '.strpos('Halo', 'z'),
    ];

    foreach ($myarr as $key) {
        echo $key;
    }
    ?>


</body>

</html>