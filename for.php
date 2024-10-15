<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loop and Conditions Example</title>
</head>
<body>

<h2>1) Penjumlahan Bilangan Ganjil dari 1 Sampai 19</h2>
<?php
$sum = 0;
for ($i = 1; $i <= 19; $i += 2) {
    $sum += $i;
}
echo "1+3+5+7+9+11+13+15+17+19 = $sum";
?>

<hr>

<h2>2) Bilangan Pangkat 2 yang Kurang dari 100</h2>
<?php
echo "Bilangan pangkat 2 kurang dari 100: ";
for ($i = 1; $i * $i < 100; $i++) {
    echo $i * $i . " ";
}
?>

<hr>

<h2>3) Cetak Bilangan 1-100 dengan Kondisi Buzz, Flash, Flash Buzz</h2>
<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$i: flash buzz<br>";
    } elseif ($i % 3 == 0) {
        echo "$i: buzz<br>";
    } elseif ($i % 5 == 0) {
        echo "$i: flash<br>";
    } else {
        echo "$i<br>";
    }
}
?>

</body>
</html>
