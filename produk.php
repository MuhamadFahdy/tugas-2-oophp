<?php 

// Jualan Produk
// Komik
// Game

class Produk{
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit =  "penerbit",
		   $harga = "0";

}

// $Produk1 = new Produk();
// var_dump($Produk1);

$Produk2 = new Produk();
$Produk2->judul = "Naruto";
$Produk2->penulis = "Masashi Kishimoto";
$Produk2->penerbit = "Shonen Jump";
$Produk2->harga = "30000";
var_dump($Produk2);
