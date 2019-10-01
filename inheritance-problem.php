<?php 

// Jualan Produk
// Komik
// Game

class Produk{
	//properti
	public $judul ,
		   $penulis ,
		   $penerbit ,
		   $harga,
		   $jmlHalaman,
		   $waktuMain;

	//Method
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit =  "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
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
	public function cetak( Produk $Produk){
		$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
		return $str; 

	}
}

//menambahkan produk2
$Produk2 = new Produk("Naruto","Masashi Kishimoto", "Shoen Jump", 30000, 100);


//menambahkan produk3
$Produk3 = new Produk("Uncharted","Neil Duckmann","Sony Computer",250000, 50);


//echo untuk menampilkan ke layar
// echo "Komik : ". $Produk2->getLabel();
// echo "<br>";
// echo "Game : " . $Produk3->getLabel();
// echo "<br>";

// //instansiasi
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($Produk2);


