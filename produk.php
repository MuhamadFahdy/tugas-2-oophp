<?php 

// Jualan Produk
// Komik
// Game

class Produk{
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit =  "penerbit",
		   $harga = "0";

	public function getLabel() {
		return "$this->penulis,$this->penerbit";
	}

}

// $Produk1 = new Produk();
// var_dump($Produk1);

$Produk2 = new Produk();
$Produk2->judul = "Naruto";
$Produk2->penulis = "Masashi Kishimoto";
$Produk2->penerbit = "Shonen Jump";
$Produk2->harga = "30000";


echo "Komik : $Produk2->penulis, $Produk2->penerbit";
echo "<br>";
echo $Produk2->getLabel();
