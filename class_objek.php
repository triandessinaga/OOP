<?php
class Mahasiswa {
    // Properties
    public $nama;
    public $nim;
    public $jurusan;
    
    // Method
    public function perkenalan() {
        return "Halo, nama saya {$this->nama} dengan NIM {$this->nim} dari jurusan {$this->jurusan}";
    }
    public function registrasi() {
        return "nama yang terdaftar adalah :{$this->nama} dengan NIM {$this->nim} dari jurusan {$this->jurusan}";
    }
}


$pendaftaran = new Mahasiswa();
$pendaftaran->nama="Farrel";
$pendaftaran->nim="090909";
$pendaftaran->jurusan="SI";

// Membuat object
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Budi";
$mahasiswa1->nim = "12345678";
$mahasiswa1->jurusan = "Teknik Informatika";

$mahasiswa2 = new Mahasiswa();
$mahasiswa2->nama = "Tuti";
$mahasiswa2->nim = "12345678";
$mahasiswa2->jurusan = "SI";

// Memanggil method
// echo $mahasiswa1->perkenalan();
// echo $mahasiswa2->perkenalan();

echo $pendaftaran->registrasi();

