<?php
class Balok
{
    // deklarasikan atribut-atribut kelas Balok
    private $panjang;
    private $lebar;
    private $tinggi;
    
    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($panjang, $lebar, $tinggi)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }

    public function setPanjang($panjang)
    {
        $this->panjang = $panjang;
    }

    public function setLebar($lebar)
    {
        $this->lebar = $lebar;
    }

    public function setTinggi($tinggi)
    {
        $this->tinggi = $tinggi;
    }

    // Metode asesor (getter) untuk mendapatkan nilai panjang
    public function getPanjang()
    {
        return $this->panjang;
    }

    public function getLebar()
    {
        return $this->lebar;
    }

    public function getTinggi()
    {
        return $this->tinggi;
    }


    // definisikan metode menghitung volume, luas permukaan, 
    // Metode untuk menghitung volume
    public function hitungVolume()
    {
        return $this->panjang * $this->lebar  * $this->tinggi;
    }

    public function hitungLuasPermukaan()
    {
        return 2 * ($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi);
    }
}


$balok_1 = new Balok(4, 8, 5);
$balok_2 = new Balok(3, 10, 12);

echo "Volume Balok: " . $balok_1->hitungVolume() . "<br>";
echo "Luas Permukaan Balok: " . $balok_1->hitungLuasPermukaan() . "<br>";

echo "Volume Balok: " . $balok_2->hitungVolume() . "<br>";
echo "Luas Permukaan Balok: " . $balok_2->hitungLuasPermukaan() . "<br>";

// contoh output: Balok

// Balok 1
// Volume: 160
// Luas Permukaan: 184

// Balok 2
// Volume: 360
// Luas Permukaan: 372