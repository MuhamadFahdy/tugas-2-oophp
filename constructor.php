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
	public function __construct( $judul, $penulis, $penerbit, $harga){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;	
	}

	//Method
	public function getLabel() {
		return "$this->penulis,$this->penerbit";
	}

}

//menambahkan produk2
$Produk2 = new Produk("Naruto","Masashi Kishimoto", "Shoen Jump", 30000);


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

