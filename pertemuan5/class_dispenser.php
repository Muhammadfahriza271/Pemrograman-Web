<?php
// buat class dispenser
class Dispenser{
    // buat property
    protected $volume;
    protected $hargaSegelas;
    const VolGelas = 250;
    public $namaMinuman;

    // buat method 
    public function isi(){
        return $this->volume = 1000;
    }
    public function harga($harga){
        return $this->hargaSegelas = $harga;
    }

    // buat method untuk menghitung 
    function hasil(){
        return $this->volume - self::VolGelas;
    }
}
// buat object
$volGalon = new Dispenser();
echo $volGalon -> namaMinuman = ('Nama Minuman Aqua');
echo '<br/><hr/>';
echo '<br/>Volume galonnya adalah' .$volGalon->isi() .'ML'; 
echo '<br/>Harga Segelasnya adalah 3000 Rupiah';
echo '<br/>Andi beli air 1 gelas yang volumenya'  . Dispenser::VolGelas  .'ML';
echo '<br/>Hasil Volume sekarang adalah' .$volGalon->hasil()  .'ML'; 
?>