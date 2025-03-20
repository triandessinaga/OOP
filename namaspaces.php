<?php
// file: Mahasiswa.php
namespace Kampus\Model;

class Mahasiswa {
    public $nama;
    
    public function __construct($nama) {
        $this->nama = $nama;
    }
}

// file: Dosen.php
namespace Kampus\Model;

class Dosen {
    public $nama;
    
    public function __construct($nama) {
        $this->nama = $nama;
    }
}

// file: index.php
require_once 'Mahasiswa.php';
require_once 'Dosen.php';

use Kampus\Model\Mahasiswa;
use Kampus\Model\Dosen;

$mhs = new Mahasiswa("Budi");
$dsn = new Dosen("Prof. Andi");

echo $mhs->nama . "<br>";
echo $dsn->nama . "<br>";