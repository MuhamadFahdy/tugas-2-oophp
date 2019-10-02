<?php 

// Jualan Produk
// Komik
// Game

class Produk{
	//properti
	private $judul ,
		   $penulis ,
		   $penerbit;

	protected $diskon = 0;

	private $harga;

	//Method
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit =  "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;	
	}

	//method
	public function setJudul($judul){
		$this->judul = $judul;
	}

	//method
	public function getJudul(){
		return $this->judul;
	}

	//method
	public function setPenulis(){
		$this->penulis = $penulis;
	}

	//method
	public function getPenulis(){
		return $this->penulis;
	}

	//method
	public function setPenerbit(){
		$this->penerbit = $penerbit;
	}

	//method
	public function getPenerbit(){
		return $this->penerbit;
	}

	//method
	public function getHarga(){
			return $this->harga - ($this->harga * $this->diskon/100);
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
		public $jmlHalaman;

		public function __construct($judul = "judul", $penulis = "penulis", $penerbit =  "penerbit", $harga = 0, $jmlHalaman = 0){

			parent::__construct($judul, $penulis, $penerbit, $harga);
			$this->jmlHalaman = $jmlHalaman;

		}

		public  function getInfoProduk(){
			$str = "Komik :" . parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
			return $str;
		}
} 


class Game extends Produk{

		public $waktuMain;

		public function __construct($judul = "judul", $penulis = "penulis", $penerbit =  "penerbit", $harga = 0, $waktuMain = 0){

			parent::__construct($judul, $penulis, $penerbit, $harga);
			
			$this->waktuMain = $waktuMain;

		}

		public function setDiskon($diskon){
		$this->diskon =  $diskon;
		}

		public  function getInfoProduk(){
			$str = "Game :". parent::getInfoProduk() ."- {$this->waktuMain} jam.";
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
$Produk2 = new Komik("Naruto","Masashi Kishimoto", "Shoen Jump", 30000, 100);


//menambahkan produk3
$Produk3 = new Game("Uncharted","Neil Duckmann","Sony Computer",250000, 50);


echo $Produk2->getInfoProduk();
echo "<br>";
echo $Produk3->getInfoProduk(); 
echo "<hr>";

$Produk3->setDiskon(50);
echo $Produk3->getHarga();
echo "<hr>";

$Produk2->setJudul(4541);
echo $Produk2->getJudul();



//echo untuk menampilkan ke layar
// echo "Komik : ". $Produk2->getLabel();
// echo "<br>";
// echo "Game : " . $Produk3->getLabel();
// echo "<br>";

// //instansiasi
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($Produk2);


