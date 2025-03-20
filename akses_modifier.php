<?php

class Mahasiswa {
    public $nama;      // Dapat diakses dari mana saja
    protected $nim;    // Hanya dapat diakses dalam class dan turunannya
    private $nilai;    // Hanya dapat diakses dalam class itu sendiri
    
    public function __construct($nama, $nim, $nilai) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->nilai = $nilai;
    }
    
    public function getNilai() {
        return $this->nilai; // Dapat mengakses private property
    }
    
    protected function hitungPredikat() {
        if ($this->nilai >= 80) return "A";
        else if ($this->nilai >= 70) return "B";
        else if ($this->nilai >= 60) return "C";
        else if ($this->nilai >= 50) return "D";
        else return "E";
    }
    
    public function getPredikat() {
        return $this->hitungPredikat(); // Memanggil method protected
    }
}

// Membuat objek Mahasiswa
$mahasiswa1 = new Mahasiswa("Budi", "12345", 85);

// Menampilkan nama dan nilai mahasiswa
echo "Nama: " . $mahasiswa1->nama . "<br>";
echo "Nilai: " . $mahasiswa1->getNilai() . "<br>";

// Menampilkan predikat mahasiswa
echo "Predikat: " . $mahasiswa1->getPredikat();

?>