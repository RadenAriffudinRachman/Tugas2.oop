<?php

class Produk {
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "PES 2019";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "One Piece";
$produk3->penulis = "Ari";
$produk3->penerbit = "Antariksa";
$produk3->harga = 50000;

$produk4 = new Produk();
$produk4->judul = "Dota 2";
$produk4->penulis = "Lukman";
$produk4->penerbit = "Galaxy";
$produk4->harga = 25000;

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<hr>";
echo "Game : $produk4->penulis, $produk4->penerbit";