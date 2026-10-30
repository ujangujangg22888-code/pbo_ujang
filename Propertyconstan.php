<?php


namespace pbo\Marketplace;

class produk {

//Prosperty
public string $kode;
public string $nama;
public int $harga;
public int $stok;

#constanta
public const PAJAK = 0.11;

public function __construct($kode,$nama,$harga,$stok){

   $this->kode = $kode;
   $this->nama = $nama;
   $this->harga = $harga;
   $this->stok = $stok;
}
 public function pajak() {
    return self::PAJAK * 100; //11
 }
  public function total() {
   return $this->harga + ($this->harga * self::PAJAK);
  }
}


//object
$produk = new Produk('P0001','Laptop',10000000,5);

$produk->kode ='P0001';
$produk->nama ='laptop';
$produk->harga = 10000000;
$produk->stok = 5;

