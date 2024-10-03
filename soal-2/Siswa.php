<?php

class Siswa
{
    // deklarasikan atribut-atribut kelas Siswa
    private $nama;
    private $nisn;
    private $alamat;
    private $jurusan;
    private $tanggalLahir;
    
    
    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($nama, $nisn, $alamat, $jurusan, $tanggalLahir)
    {
        $this->nama = $nama;
        $this->nisn = $nisn;
        $this->alamat= $alamat;
        $this->jurusan= $jurusan;
        $this->tanggalLahir= $tanggalLahir;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setNisn($nisn)
    {
        $this->nisn = $nisn;
    }

    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function setTanggalLahir($tanggalLahir)
    {
        $this->tanggalLahir = $tanggalLahir;
    }

    
    // Metode asesor (getter) untuk mendapatkan nilai panjang
    public function getNama($nama)
    {
        return $this->nama = $nama;
    }

    public function getNisn($nisn)
    {
        return $this->nisn = $nisn;
    }

    public function getAlamat($alamat)
    {
        return $this->alamat = $alamat;
    }

    public function getJurusan($jurusan)
    {
        return $this->jurusan = $jurusan;
    }

    public function getTanggalLahir($tanggalLahir)
    {
       return $this->tanggalLahir = $tanggalLahir;
    }

    // buat metode untuk menghitung umur siswa
    public function hitungUmur() {
        $tanggalLahir = explode("-", $this->tanggalLahir);
        $tahunlLahir = $tanggalLahir[2];
        $tahun_sekarang = date("Y");
        $umur = $tahun_sekarang - $tahunlLahir;
        return $umur;
        
    }
}

// buat dua buah objek siswa
$siswa_1 = new Siswa("Bambang", "1234", "Loa Bakung", "PPLG", "27-11-2006");
$siswa_2 = new Siswa("Bahrun", "1235", "Air Putih", "PPLG", "13-01-2007");

if ($siswa_1->hitungUmur() > $siswa_2->hitungUmur()) {
    echo $siswa_1->getNama() . " lebih tua dibandingkan " . $siswa_2->getNama() . ".";
} elseif ($siswa_1->hitungUmur() < $siswa_2->hitungUmur()) {
    echo $siswa_2->getNama() . " lebih tua dibandingkan " . $siswa_1->getNama() . ".";
} else {
    echo $siswa_1->getNama() . " dan " . $siswa_2->getNama() . " sama tua.";
}