<?php

class Produk {

        //property
        public string $kode;
        public string $nama;
        public int $harga;
        public int $stok;
        
        //constant
        public const PAJAK = 0.11;
            public fuction pajak () {
                return self::pajak *100;
            }

            public function total () {
                return $this->harga + ($this->harga * self::pajak);
            }
            
}

//object
$produk = new Produk();

//input ke property
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung harga
//$pajak = Produk::PAJAK * 100;
//$jumlahPajak = $produk->harga * Produk::PAJAK;

//total
$total = $produk->harga + $jumlahPajak;

//hasil
echo "Produk: " . $produk->nama;
echo "<br/>";

echo "Harga: " . $produk->harga;
echo "<br/>";

echo "Stok: " . $produk->stok;
echo "<br/>";

echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp. " . $total;