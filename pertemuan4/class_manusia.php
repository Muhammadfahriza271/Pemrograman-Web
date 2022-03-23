<?php
// Membuat class manusia
class Manusia{
    // Buat Property
    var $nama;
    var $warna;

    // Buatlah method atau function
    function tampilkan_nama(){
        return '<br/>Nama saya adalah Muhammad Fahriza';
    }
    function __construct(){
        return 'Kulit saya berwarna coklat ';
    }
}
// Buat object
$manusia = new Manusia();
echo $manusia -> __construct();
echo $manusia -> tampilkan_nama();
?>