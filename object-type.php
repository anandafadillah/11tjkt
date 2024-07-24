<?php

//produk penjualan
//musik
//komik
//game

class Produk{
    // property
    public $judul,
           $penerbit,
           $penulis,
           $harga;
    //construct
    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0)
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }
    //method
    public function getData(){
        return "$this->penerbit, $this->penulis";
    }
}

//Object-type
class infoProduk{
    //method untuk mencetak info produk
    public function cetak(Produk $Produk){
        $data = "{$produk->judul} | {$produk->getData()} (Rp. {$produk->harga})";
        return $data;
    }
}

$Produk1 = new Produk("RAPSODI", "JKT48", "AKB48", 10000);
$Produk2 = new Produk("Mobile Legend", "Moonton", "GameCom", 85000);


echo "Musik : ". $Produk1->getData();
echo "<br>";
echo "Game : ". $Produk2->getData();

?>