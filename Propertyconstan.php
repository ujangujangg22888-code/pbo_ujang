<?php

class produk {

//Prosperty
public string $kode;
public string $nama;
public int $harga;
public int $stok;

#constanta
public const PAJAK = 0.11;
}

//object
$produk = new Produk();

$produk->kode ='P0001';
$produk->nama ='laptop';
$produk->harga = 10000000;
$produk->stok = 5;

#hitung pajak
$pajak = produk::PAJAK * 100; //11
$jumblahPajak = $produk->harga * produk::PAJAK; //1.1 JUTA

#total
$total = $produk->harga + $jumblahPajak; //11,1 JUTA 

// hasil
echo "Produk: ".$produk->nama;
echo "<br/>";

echo "Harga: ".$produk->harga;
echo "<br/>";

echo "Stok: ".$produk->stok;
echo "<br/>";

echo "Pajak: ". $pajak;
echo "<br/>";
echo "<br/>";
echo "Total harga Setelah pajak: ". $total;
