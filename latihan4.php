<html>
    <head>
        <title>Test Penyisipan PHP pada HTML</title>
    </head>
    <body>
        <?php
            // berikut ini adalah inisiasi beberapa variabel
            $namad = 'Jean';
            $namat = 'Luc';
            $namab = 'Piccard';
        ?>
        <b>Ini adalah kapal Federasi Planet USS Enterprise. <br>
        <?php
            echo "Saya $namab, $namad $namat $namab, kapten kapal.";
        ?>
    </body>
</html>