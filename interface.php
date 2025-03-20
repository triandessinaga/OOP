<?php
interface HitungNilai {
    public function hitungNilaiAkhir();
    public function hitungGradeNilai();
}

class NilaiMahasiswa implements HitungNilai {
    private $uts;
    private $uas;
    private $tugas;
    
    public function __construct($uts, $uas, $tugas) {
        $this->uts = $uts;
        $this->uas = $uas;
        $this->tugas = $tugas;
    }
    
    public function hitungNilaiAkhir() {
        return ($this->uts * 0.3) + ($this->uas * 0.5) + ($this->tugas * 0.2);
    }
    
    public function hitungGradeNilai() {
        $nilai = $this->hitungNilaiAkhir();
        if ($nilai >= 80) return "A";
        else if ($nilai >= 70) return "B";
        else if ($nilai >= 60) return "C";
        else if ($nilai >= 50) return "D";
        else return "E";
    }
}

$nilai = new NilaiMahasiswa(80, 90, 85);
echo "Nilai akhir: " . $nilai->hitungNilaiAkhir() . "<br>";
echo "Grade: " . $nilai->hitungGradeNilai();