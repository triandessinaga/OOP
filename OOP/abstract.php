<?php
abstract class Kendaraan {
    protected $merk;
    protected $tahun;
    
    public function __construct($merk, $tahun) {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }
    
    abstract public function getInfo();
    
    public function getMerk() {
        return $this->merk;
    }
}

class Mobil extends Kendaraan {
    private $jumlahPintu;
    
    public function __construct($merk, $tahun, $jumlahPintu) {
        parent::__construct($merk, $tahun);
        $this->jumlahPintu = $jumlahPintu;
    }
    
    public function getInfo() {
        return "Mobil {$this->merk} tahun {$this->tahun} dengan {$this->jumlahPintu} pintu";
    }
}

$mobil = new Mobil("Toyota", 2020, 4);
echo $mobil->getInfo();