<?php 

// Jualan Produk
// Komik
// Game

class Produk{
	//properti
	public $judul ,
		   $penulis ,
		   $penerbit ,
		   $harga;

	//Method
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit =  "penerbit", $harga = 0){
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

class CetakInfoProduk{
	public function cetak($Produk){
		$str = "{$Produk->judul} | {$Produk->getLabel()} | (Rp. {$Produk->harga})";
	}
}

//menambahkan produk2
$Produk2 = new Produk("Naruto","Masashi Kishimoto", "Shoen Jump", 30000);


//menambahkan produk3
$Produk3 = new Produk("Uncharted","Neil Duckmann","Sony Computer",250000);


//echo untuk menampilkan ke layar
echo "Komik : ". $Produk2->getLabel();
echo "<br>";
echo "Game : " . $Produk3->getLabel();

