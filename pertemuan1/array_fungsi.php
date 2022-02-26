<?php
$ar_buah = ["p"=>"pepaya", "a"=>"apel", "m"=>"mangga", "j"=>"jeruk"];
echo "<ol>";
foreach ($ar_buah as $buah => $v) {
    echo "<li> $buah - $v </li>";
}
echo "</ol>";
// fungsi sort berguna untuk mengurutkan array dalam urutan menaik
sort($ar_buah);
echo "</hr>";
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
    echo "<li> $buah - $k </li>";
}
echo "</ol>";
// fungsi arsort berguna untuk mengurutkan array dalam urutan
arsort($ar_buah);
echo "</hr>";
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
    echo "<li> $buah - $k </li>";
}
echo "</ol>";
echo "<hr>";
?>
<!-- fungsi array pop berguna untuk menghapus nilai -->
<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_pop($tims);
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<hr>";
?>
<!-- fungsi array push berguna untuk menambahkan nilai ke dalam data array terakhir -->
<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_push($tims, "wati");
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<hr>";
?>
<!-- fungsi array shift berguna untuk menghapus nilai awal dari sebuah data array -->
<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_shift($tims);
foreach ($tims as $person) {
    echo "<br/>$person";
}
echo "<hr>";
?>
<!-- fungsi array unshift berguna untuk menambahkan nilai array satu atau lebih elemen ke dalam suatu array -->
<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_unshift($tims, "joko","wati");
foreach ($tims as $person) {
    echo "<br/>$person";
}
?>