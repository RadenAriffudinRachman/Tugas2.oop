<?php

require_once 'App/init.php';

// $produk1 = new Komik("One Piece","Ari","Antariksa", 50000, 100);
// $produk2 = new Game("Dota 2","Lukman","Steam", 1000000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();