<?php

abstract class Bentuk {
    abstract public function hitungLuas();
    abstract public function hitungKeliling();
}

class Lingkaran extends Bentuk {
    private $jariJari;
    
    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }
    
    public function hitungLuas() {
        return pi() * $this->jariJari * $this->jariJari;
    }
    
    public function hitungKeliling() {
        return 2 * pi() * $this->jariJari;
    }
}

class PersegiPanjang extends Bentuk {
    private $panjang;
    private $lebar;
    
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }
    
    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

// Penggunaan
$lingkaran = new Lingkaran(7);
$persegi = new PersegiPanjang(10, 5);

echo "Luas lingkaran: " . $lingkaran->hitungLuas() . "<br>";
echo "Luas persegi panjang: " . $persegi->hitungLuas() . "<br>";