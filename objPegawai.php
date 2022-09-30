<?php
require 'Pegawai.php';

//ciptakan object
$p1 = new Pegawai(191402000001, 'Sucipto Nugroho', 'Manager', 'Islam', 'Menikah');
$p2 = new Pegawai(191402000002, 'Sri Astuti', 'Asmen', 'Kristen', 'Belum Menikah');
$p3 = new Pegawai(191402000003, 'Denny Bandowo', 'Kabag', 'Islam', 'Menikah');
$p4 = new Pegawai(191402000004, 'Susi Mawarni', 'Staff', 'Budha', 'Belum Menikah');
$p5 = new Pegawai(191402000005, 'Mhd. Syahrizal', 'Staff', 'Islam', 'Belum Menikah');

//use member class
$p1->setGajiPokok();
$p2->setGajiPokok();
$p3->setGajiPokok();
$p4->setGajiPokok();
$p5->setGajiPokok();

$p1->setTunjab();
$p2->setTunjab();
$p3->setTunjab();
$p4->setTunjab();
$p5->setTunjab();

$p1->setTunkel();
$p2->setTunkel();
$p3->setTunkel();
$p4->setTunkel();
$p5->setTunkel();

$p1->setZakatProfesi();
$p2->setZakatProfesi();
$p3->setZakatProfesi();
$p4->setZakatProfesi();
$p5->setZakatProfesi();

echo '<h2 align="center">'.Pegawai::PEGAWAI.'</h2>';
$p1->mencetak();
$p2->mencetak();
$p3->mencetak();
$p4->mencetak();
$p5->mencetak();