<?php

class LuasLingkaran {

    public const phi = 3.14;

    public int $jari;

    public function __construct($isiJari = 1){
        $this ->jari = $isiJari;
    }

    public function tampil(){
        $rumus = LuasLingkaran::phi * ($this->jari * $lingkaran->jari);
        echo "Lingkaran {$nama} ini hasil nya adalah : {$rumus}";
    }

    public static function testing() {
        echo "<br/>";
        echo "ini testing static";
    }

    public function __destruct(){
        echo "<br/>";
        echo "Udahan";
    }
}

$lingkaran = new LuasLingkaran();
$lingkaran ->jari = 10;
$lingkaran->tampil("roda");

LuasLingkaran::tetsting();