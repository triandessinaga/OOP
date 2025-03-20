<?php
// file: autoload.php
spl_autoload_register(function($class) {
    $baseDir = __DIR__ . '/';
    $file = $baseDir . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

// file: Kampus/Model/Mahasiswa.php
namespace Kampus\Model;

class Mahasiswa {
    public $nama;
    
    public function __construct($nama) {
        $this->nama = $nama;
    }
}

// file: index.php
require_once 'autoload.php';

$mhs = new Kampus\Model\Mahasiswa("Budi");
echo $mhs->nama;