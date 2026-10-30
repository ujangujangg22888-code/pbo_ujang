<?php

//panggil file Propertyconstan
require('./Propertyconstan.php');

use pbo\Marketplace\produk;

//object
$produk = new Produk('P0001','Laptop',10000000,5);

// hasil
echo "Produk: ".$produk->nama;
echo "<br/>";

echo "Harga: ".$produk->harga;
echo "<br/>";

echo "Stok: ".$produk->stok;
echo "<br/>";

echo "Pajak: ". $produk->pajak() ."%";
echo "<br/>";
echo "<br/>";
echo "Total harga Setelah pajak:  Rp.". $produk->total();