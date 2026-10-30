<?php

require('./PropertyConstant.php');

use PBO\Marketplace\Produk;

//object
$produk = new Produk('P0001','Laptop',10000000,5);

//input ke property
//$produk->kode = 'P0001';
//$produk->nama = 'Laptop';
//$produk->harga = 10000000;
//$produk->stok = 5;

//hitung harga
//$pajak = Produk::PAJAK * 100;
//$jumlahPajak = $produk->harga * Produk::PAJAK;

// total
//$total = $produk->harga + $jumlahPajak;

//hasil
echo "Produk: " . $produk->nama;
echo "<br/>";

echo "Harga: " . $produk->harga;
echo "<br/>";

echo "Stok: " . $produk->stok;
echo "<br/>";

echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp. ".$produk->total();