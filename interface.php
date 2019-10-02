<?php 

// Jualan Produk
// Komik
// Game

interface InfoProduk{
	//method  
	 public function getInfoProduk();

}

abstract class Produk{
	//properti
	protected $judul ,
		   $penulis ,
		   $penerbit,
		   $harga,
		   $diskon = 0;

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
	public function setPenulis($penulis){
		$this->penulis = $penulis;
	}

	//method
	public function getPenulis(){
		return $this->penulis;
	}

	//method
	public function setPenerbit($penerbit){
		$this->penerbit = $penerbit;
	}

	//method
	public function getPenerbit(){
		return $this->penerbit;
	}

	//method
	public function setDiskon($diskon){
		$this->diskon =  $diskon;
		}

	//method
	public function getDiskon(){
		return $this->diskon;
	}

	//method
	public function setHarga($harga){
		$this->harga = $harga;
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
	abstract public function getInfo();

}

//kelas anak
class Komik extends Produk implements InfoProduk{
		public $jmlHalaman;

		public function __construct($judul = "judul", $penulis = "penulis", $penerbit =  "penerbit", $harga = 0, $jmlHalaman = 0){

			parent::__construct($judul, $penulis, $penerbit, $harga);
			$this->jmlHalaman = $jmlHalaman;

		}

		//method
		public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()} ({$this->harga})";

		return $str;
		}

		public  function getInfoProduk(){
			$str = "Komik :" . $this->getInfo() ." - {$this->jmlHalaman} Halaman.";
			return $str;
		}
} 

//kelas anak
class Game extends Produk implements InfoProduk{

		public $waktuMain;

		public function __construct($judul = "judul", $penulis = "penulis", $penerbit =  "penerbit", $harga = 0, $waktuMain = 0){

			parent::__construct($judul, $penulis, $penerbit, $harga);
			
			$this->waktuMain = $waktuMain;

		}

		//method
		public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()} ({$this->harga})";

		return $str;
		}

		public  function getInfoProduk(){
			$str = "Game :". $this->getInfo() ."- {$this->waktuMain} jam.";
			return $str; 
		}
} 



class CetakInfoProduk{
	public $daftarProduk = array();

	public function tambahProduk(Produk $produk){
		$this->daftarProduk[] = $produk;
	}



	public function cetak(){
		$str = "DAFTAR PRODUK : <br> ";

		foreach ($this->daftarProduk as $p) {
			$str .="- {$p->getInfoProduk()} <br>";
		}

		return $str; 

	}
}

//menambahkan produk2
$Produk2 = new Komik("Naruto","Masashi Kishimoto", "Shoen Jump", 30000, 100);


//menambahkan produk3
$Produk3 = new Game("Uncharted","Neil Duckmann","Sony Computer",250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($Produk2);
$cetakProduk->tambahProduk($Produk3);

echo $cetakProduk->cetak();

// $tes = new Produk();


 
// echo $Produk2->getInfoProduk();
// echo "<br>";
// echo $Produk3->getInfoProduk(); 
// echo "<hr>";

// $Produk3->setDiskon(50);
// echo $Produk3->getHarga();
// echo "<hr>";

// $Produk2->setPenulis("fahdy");
// echo $Produk2->getPenulis();



//echo untuk menampilkan ke layar
// echo "Komik : ". $Produk2->getLabel();
// echo "<br>";
// echo "Game : " . $Produk3->getLabel();
// echo "<br>";

// //instansiasi
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($Produk2);


