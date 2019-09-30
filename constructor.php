<?php 

// Jualan Produk
// Komik
// Game

class Produk{
	//properti
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit =  "penerbit",
		   $harga = "0";

	//Method
	public function __construct(){
			
	}

	//Method
	public function getLabel() {
		return "$this->penulis,$this->penerbit";
	}

}

//menambahkan produk2
$Produk2 = new Produk();
$Produk2->judul = "Naruto";
$Produk2->penulis = "Masashi Kishimoto";
$Produk2->penerbit = "Shonen Jump";
$Produk2->harga = "30000";

//menambahkan produk3
$Produk3 = new Produk();
$Produk3->judul = "Uncharted";
$Produk3->penulis = "Neil Duckmann";
$Produk3->penerbit = "Sony Computer";
$Produk3->harga = "250000";

//echo untuk menampilkan ke layar
echo "Komik : ". $Produk2->getLabel();
echo "<br>";
echo "Game : " . $Produk3->getLabel();

