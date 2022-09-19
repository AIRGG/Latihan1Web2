<html>
    <head>
        <title>Test Penyisipan PHP pada HTML</title>
    </head>
    <body>
        <?php
            // berikut ini adalah inisiasi beberapa variabel
            $namad = 'AA';
            $namat = 'BB';
            $namab = 'CC';
        ?>
        <b>Ini adalah kapal Federasi Planet USS Enterprise. <br>
        <?php
            echo "Saya $namab, $namad $namat $namab, kapten kapal.";
        ?>
    </body>
</html>