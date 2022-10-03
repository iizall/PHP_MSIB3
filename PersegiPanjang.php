<?php
require_once "Bentuk2D.php";

class PersegiPanjang extends Bentuk2D {
    //membuat variabel
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang(){
        echo "Persegi Panjang";
    }

    public function luasBidang(){
        $this->luasPersegiPanjang = $this->panjang * $this->lebar;
        echo $this->luasPersegiPanjang." cm<sup>2";
    }

    public function kelilingBidang(){
        $this->kelilingPersegiPanjang = 2 * ($this->panjang + $this->lebar);
        echo $this->kelilingPersegiPanjang." cm";
    }

    public function keterangan(){
        echo "Panjang = ".$this->panjang." cm";
        echo "<br/>Lebar = ".$this->lebar." cm";
    }
}