<?php
echo "looping menggunakan for : </br>";
for ($i = 1; $i <=10 ; $i++) {
    echo "<li>Urutan ke-$i</li>";
}

echo "</br>";
echo "looping menggunakan while";
$i = 1;
while ($i <=10) {
    echo "<li>Urutan ke-$i</li>";
    $i++;
}

?>