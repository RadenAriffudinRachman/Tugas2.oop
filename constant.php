<?php

// define('NAMA', 'Raden Ariffudin Rachman');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba {
//     const NAMA = 'Ari';
// }

// echo Coba::NAMA;

// echo __LINE__;

// function coba(){
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>