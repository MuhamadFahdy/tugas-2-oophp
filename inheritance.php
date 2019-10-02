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
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	}

	//Method
	public function getLabel() {
		return "$this->penulis,$this->penerbit";
	}

	//method 
	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} ({$this->harga})";

		return $str;
	}

}

class Komik extends Produk{
		public  function getInfoProduk(){
			$str = "Komik : {$this->judul} | {$this->getLabel()} ({$this->harga}) - {$this->jmlHalaman} Halaman.";
			return $str;
		}
} 


class Game extends Produk{
		public  function getInfoProduk(){
			$str = "Game : {$this->judul} | {$this->getLabel()} ({$this->harga}) - {$this->waktuMain} jam.";
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
$Produk2 = new Komik("Naruto","Masashi Kishimoto", "Shoen Jump", 30000, 100, 0);


//menambahkan produk3
$Produk3 = new Game("Uncharted","Neil Duckmann","Sony Computer",250000, 0, 50);


echo $Produk2->getInfoProduk();
echo "<br>";
echo $Produk3->getInfoProduk(); 
//echo untuk menampilkan ke layar
// echo "Komik : ". $Produk2->getLabel();
// echo "<br>";
// echo "Game : " . $Produk3->getLabel();
// echo "<br>";

// //instansiasi
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($Produk2);


