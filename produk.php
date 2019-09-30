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

$Produk3 = new Produk();
$Produk3->judul = "Uncharted";
$Produk3->penulis = "Neil Duckmann";
$Produk3->penerbit = "Sony Computer";
$Produk3->harga = "250000";

echo "Komik : ". $Produk2->getLabel();
echo "<br>";
echo "Game : " . $Produk3->getLabel();

