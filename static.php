<?php

// class ContohStatic {
//     public static $angka = 1;

//     public static function halo(){
//         return "Halo " . self::$angka++ . " Kali." ;
//     }
// }

// // :: cara untuk mengakses property static
// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh {
    // nilai static akan selalu tetap meski objeknya di instansiasi
    public static $angka = 1;

    public function halo(){
        return "Halo " . self::$angka++ . " kali <br>";
    }
}

$obj = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";
$obj2 = new Contoh();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();