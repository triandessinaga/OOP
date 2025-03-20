<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;
    public $matakuliah;
    
    // Constructor
    public function __construct($nama, $nim, $jurusan,$matakuliah) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->matakuliah = $matakuliah;
        // echo "Objek mahasiswa {$this->nama} dibuat!<br>";
    }
    
    // Destructor
    // public function __destruct() {
    //     // echo "Objek mahasiswa {$this->nama} dihapus!<br>";
    // }
    
    public function perkenalan() {
        return "Halo, nama saya {$this->nama} dengan NIM {$this->nim} dari jurusan {$this->jurusan} sedang belajar {$this->matakuliah}";
    }
}

// Membuat object dengan constructor
$mahasiswa1 = new Mahasiswa("Paulus", "12345678", "Teknik Informatika","Wep");
echo $mahasiswa1->perkenalan();