<?php
    function kelulusan($_nilai) {
        if ($_nilai > 55) {
            return 'LULUS';
        }else {
            return 'TIDAK LULUS';
        }
    }
    function grade($_nilai) {
        if ($_nilai > 100){
            return "I";
        } elseif ($_nilai >= 85){
            return "A";
        } elseif ($_nilai >= 70){
            return "B";
        } elseif ($_nilai >= 56){
            return "C";
        } elseif ($_nilai >= 36){
            return "D";
        } elseif ($_nilai >= 0){
            return "E";
        } else{
            return "I";
        }
    }
    function predikat($_nilai) {
        if ($_nilai > 100){
            return "Tidak ada";
        } elseif ($_nilai >= 85){
            return "Sangat memuaskan";
        } elseif ($_nilai >= 70){
            return "Memuaskan";
        } elseif ($_nilai >= 56){
            return "Cukup";
        } elseif ($_nilai >= 36){
            return "Kurang";
        } elseif ($_nilai >= 0){
            return "Sangat kurang";
        } else{
            return "Tidak ada";
        }
    }

    