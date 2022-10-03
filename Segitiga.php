<?php
require_once "Bentuk2D.php";

class Segitiga extends Bentuk2D {
    //membuat variabel
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang(){
        echo "Segitiga Sama Kaki";
    }

    public function luasBidang(){
        $this->luasSegitiga = 0.5 * $this->alas * $this->tinggi;
        return $this->luasSegitiga." cm<sup>2";
    }

    public function kelilingBidang(){
        $this->kelilingSegitiga = $this->alas + 2 * sqrt((pow(0.5 * $this->alas, 2)) + (pow($this->tinggi, 2)));
        return $this->kelilingSegitiga." cm";
    }

    public function keterangan(){
        echo "Alas = ".$this->alas." cm";
        echo "<br/>Tinggi = ".$this->tinggi." cm";
        echo "<br/>Sisi Miring = ".sqrt((pow(0.5 * $this->alas, 2)) + (pow($this->tinggi, 2)))." cm</b>";
    }
}