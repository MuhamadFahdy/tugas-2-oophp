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
		   $waktuMain,
		   $tipe;

	//Method
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit =  "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;	
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	//Method
	public function getLabel() {
		return "$this->penulis,$this->penerbit";
	}

	//method 
	public function getInfoLengkap(){
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} ({$this->harga})";
		if ($this->tipe == "Komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} else if ($this->tipe == "Game") {
			$str .= " - {$this->waktuMain} Jam.";
		}

		return $str;
	}

}

class CetakInfoProduk{
	public function cetak( Produk $Produk){
		$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
		return $str; 

	}
}

//menambahkan produk2
$Produk2 = new Produk("Naruto","Masashi Kishimoto", "Shoen Jump", 30000, 100, 0,"Komik");


//menambahkan produk3
$Produk3 = new Produk("Uncharted","Neil Duckmann","Sony Computer",250000, 0, 50,"Game");


echo $Produk2->getInfoLengkap();
//echo untuk menampilkan ke layar
// echo "Komik : ". $Produk2->getLabel();
// echo "<br>";
// echo "Game : " . $Produk3->getLabel();
// echo "<br>";

// //instansiasi
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($Produk2);


