<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key(index) dan value
// index dimulai dari 0

// membuat array cara lama
$hari = array("senin", "selasa", "rabu",);
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array'
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];
// echo "<br>";

// menambahkan elemen baru pada array
var_dump($hari);
echo "<br>";
$hari[] = "kamis";
$hari[] = "jumat";
var_dump($hari);
?>