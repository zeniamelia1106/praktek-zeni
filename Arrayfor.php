<?php

$nama = ["zeni","maya","ksnl","ari","ole"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>looping for array</title>
</head>
<body>
    <?php
        for ($i = 0; $i < count($nama); $i++){
        

        echo "<li>$nama[$i]</li>";
    }
    ?>
</body>
</html>
