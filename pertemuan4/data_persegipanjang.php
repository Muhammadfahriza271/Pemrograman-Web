<?php
// memanggil file atau class_lingkaran.php
require_once 'class_persegipanjang.php';
echo "Luas dan Keliling Persegi Panjang : ";
$persegipanjang1 = new PersegiPanjang(10, 12);
$persegipanjang2 = new PersegiPanjang(8, 10);
echo "<br/>";
// Menghitung luas persegi panjang menggunakan fungsi getluas
echo "<br/> Luas Persegi Panjang I adalah = " .$persegipanjang1->getluas();
echo "<br/> Luas Persegi Panjang II adalah = " .$persegipanjang2->getluas();
echo "<br/>";

// Menghitung luas persegi panjang menggunakan fungsi getkeliling
echo "<br/> Keliling Persegi Panjang I adalah = " .$persegipanjang1->getkeliling();
echo "<br/> Keliling Persegi Panjang II adalah = " .$persegipanjang2->getkeliling();
?>