<?php
    class NilaiMahasiswa {
        var $nim;
        var $matkul;
        var $nilai;

        function __construct($nim, $matkul, $nilai) {
            $this->nim = $nim;
            $this->matkul = $matkul;
            $this->nilai = $nilai;
        }
        function hitungNilai() {
            return $this->nilai;
        }
        function kelulusan($keterangan) {
            if ($keterangan > 55 && $keterangan <=100) {
                return 'LULUS';
            }else {
                return 'TIDAK LULUS';
            }
        }
        function grade($keterangan) {
            if ($keterangan > 100){
                return "I";
            } elseif ($keterangan >= 85){
                return "A";
            } elseif ($keterangan >= 70){
                return "B";
            } elseif ($keterangan >= 56){
                return "C";
            } elseif ($keterangan >= 36){
                return "D";
            } elseif ($keterangan >= 0){
                return "E";
            } else{
                return "I";
            }
        }
        
    }