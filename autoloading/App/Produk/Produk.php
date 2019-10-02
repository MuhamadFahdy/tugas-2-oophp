<?php 

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

 ?>