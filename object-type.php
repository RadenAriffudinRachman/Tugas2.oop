<?php

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("One Piece","Ari","Antariksa", 50000);
$produk2 = new Produk("Dota 2","Lukman","Steam", 1000000000000);

echo "Komik : $produk1->penulis, $produk1->penerbit";

echo "<hr>";

echo "Game : $produk2->penulis, $produk2->penerbit";

echo "<hr>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);