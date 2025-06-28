<?php

$mahasiswa = [
    "001"=> "zeni",
    "002"=> "ari",
    "003"=> "ksnl",
    "004"=> "maya",
    "005"=> "ole",];

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
<meta charset="UTF-8">
        <title>array associative</title>
    </head>
    <>
        <?php foreach ($mahasiswa as $nrp => $nama) : ?>
            <li><?php echo "$nrp : $nama"; ?></li>
            <?php endforeach; ?>
    </body>
    </html>
