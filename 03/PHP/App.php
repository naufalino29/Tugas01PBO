<?php

require_once 'BangunDatar.php';

$bd = new BangunDatar();

$bd->luas();
$bd->keliling();

$lk = new Lingkaran(15);
echo "Luas lingkaran: " . $lk->luas() . PHP_EOL;
echo "keliling lingkaran: " . $lk->keliling() . PHP_EOL;

$pj = new Persegi(10);
echo "Luas Bujur Sangkar: " . $pj->luas() . PHP_EOL;
echo "keliling Bujur Sangkar: " . $pj->keliling() . PHP_EOL;

$sg = new Segitiga(10, 8);
echo "Luas Segitiga: " . $sg->luas() . PHP_EOL;

$sg->keliling();