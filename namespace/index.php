<?php 

require_once "App/init.php";

// //menambahkan produk2
// $Produk2 = new Komik("Naruto","Masashi Kishimoto", "Shoen Jump", 30000, 100);


// //menambahkan produk3
// $Produk3 = new Game("Uncharted","Neil Duckmann","Sony Computer",250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($Produk2);
// $cetakProduk->tambahProduk($Produk3);

// echo $cetakProduk->cetak();

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new  ServiceUser();
echo "<hr>";
new ProdukUser();
 ?>