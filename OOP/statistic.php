<?php
class Matematika {
    public static $PI = 3.14159;
    
    public static function luasLingkaran($jariJari) {
        return self::$PI * $jariJari * $jariJari;
    }
    
    public static function kelilingLingkaran($jariJari) {
        return 2 * self::$PI * $jariJari;
    }
}

// Mengakses static property
echo "Nilai PI: " . Matematika::$PI . "<br>";

// Memanggil static method
echo "Luas lingkaran dengan jari-jari 7: " . Matematika::luasLingkaran(7) . "<br>";
echo "Keliling lingkaran dengan jari-jari 7: " . Matematika::kelilingLingkaran(7) . "<br>";