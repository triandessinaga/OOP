<?php
class Mahasiswa {
    private $nama;
    private $nim;
    private $nilai;
    
    public function __construct($nama, $nim, $nilai) {
        $this->setNama($nama);
        $this->setNim($nim);
        $this->setNilai($nilai);
    }
    
    // Getter
    public function getNama() {
        return $this->nama;
    }
    
    public function getNim() {
        return $this->nim;
    }
    
    public function getNilai() {
        return $this->nilai;
    }
    
    // Setter
    public function setNama($nama) {
        if (empty($nama)) {
            throw new Exception("Nama tidak boleh kosong");
        }
        $this->nama = $nama;
    }
    
    public function setNim($nim) {
        if (strlen($nim) != 8) {
            throw new Exception("NIM harus 8 digit");
        }
        $this->nim = $nim;
    }
    
    public function setNilai($nilai) {
        if ($nilai < 0 || $nilai > 100) {
            throw new Exception("Nilai harus antara 0-100");
        }
        $this->nilai = $nilai;
    }
}

// Membuat objek Mahasiswa
try {
    $mahasiswa1 = new Mahasiswa("Andi", "12345678", 85);

    // Menampilkan informasi mahasiswa
    echo "Nama: " . $mahasiswa1->getNama() . "<br>";
    echo "NIM: " . $mahasiswa1->getNim() . "<br>";
    echo "Nilai: " . $mahasiswa1->getNilai() . "<br>";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
