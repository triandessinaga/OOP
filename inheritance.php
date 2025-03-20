<?php

class Mahasiswa {
    public $nama;
    protected $nim;
    
    public function __construct($nama, $nim) {
        $this->nama = $nama;
        $this->nim = $nim;
    }
    
    public function perkenalan() {
        return "Halo, nama saya {$this->nama} dengan NIM {$this->nim}";
    }
}

class MahasiswaBaru extends Mahasiswa {
    public $angkatan;
    
    public function __construct($nama, $nim, $angkatan) {
        parent::__construct($nama, $nim);
        $this->angkatan = $angkatan;
    }
    
    public function perkenalan() {
        return parent::perkenalan() . " dari angkatan {$this->angkatan}";
    }
}

$mhs_baru = new MahasiswaBaru("Andi", "87654321", "2023");
echo $mhs_baru->perkenalan();