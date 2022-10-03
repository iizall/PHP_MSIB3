<?php
require_once "Bentuk2D.php";

class Lingkaran extends Bentuk2D {
    //membuat variabel
    public $jari2;

    public function __construct($jari2) {
        $this->jari2 = $jari2;
    }

    public function namaBidang(){
        echo "Lingkaran";
    }

    public function luasBidang(){
        $this->luasLingkaran = 3.14 * $this->jari2 * $this->jari2;
        echo $this->luasLingkaran." cm<sup>2";
    }

    public function kelilingBidang(){
        $this->kelilingLingkaran = 2 * 3.14 * $this->jari2;
        echo $this->kelilingLingkaran." cm";
    }

    public function keterangan(){
        echo "Jari-jari = ".$this->jari2." cm";
    }
}