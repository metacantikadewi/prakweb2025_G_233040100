<?php

class Produk {
    Private $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul = 'judul', $penulis = 'penulis, $penerbit = 'penerbit', $harga = 'harga) {
        $this->judul =$judul;
        $this->penulis = $judul;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // bagian getter
    public function getjudul() {
        return $this->judul;
    }

    // pindahkan getharga()
    public function getHarga() {
        return $this-> harga;
    }

    // Method Umum
    public function getLabel() {
        return "{$this->judul} | {$this->getLabel()} (RP. {$this->harga})";
    }

    // bagian setter
    public function setJudul($judulBaru) {
    }
}

// CHILD CLASS 1
class Komik extends Produk {
    public $jumlHalaman;
    
    public function __construct($judul, $penerbit, $harga, $jmlHalaman) {
        // Panggil constructor parent
        parent::__construct($judul, $penulis, $penerbit, $harga);
        // set properti spesifik child
        $this->jmlHalaman = $jmlHalaman;
    }
     public function getInfoProduk() {
        // Ambil method getLabel() dari parent
        $infoParent = parent:: getInfoProduk();
        return "Komik; {$infoParent} - {$this->jmlHalaman} . Halaman";
     }
}

// // CHILD CLASS 2
// class Game extends Produk {
// public $waktuMaain;

// public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
// parent::__construct($judul, $penulis, $penerbit, $harga);
// $this->waktuMesin = $waktuMain;
// }

// public function getInfoProduk() {
// $infoParent = parent::getlinfoProduk();
// return "Game: {$infoParent} ~
{$this->waktuMain}();
//  }
// }

// --- BAGIAN OBJECT ---
    $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000,100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// Ini Setter
// Property Private yang awalnya "NARUTO" berubah menjadi "GOKU" $produk1->setJudul("GOKU");
// Ini Getter
echo $produk1->setJudul("GOKU");
echo "<br>";

echo $produk1->getInfoProduk();
// echo $produk2->getInfoProduk();
?>