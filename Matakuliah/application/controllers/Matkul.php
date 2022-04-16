<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class Matkul extends CI_Controller {
    public function index()
    {
    $this->load->model('matkul_model','mk1');
    $this->mk1->id=1;
    $this->mk1->matkul='Pemrograman Web';
    $this->mk1->hari='Selasa';
    $this->mk1->jam='13.00';

    $this->load->model('matkul_model','mk2');
    $this->mk2->id=2;
    $this->mk2->matkul='Basis Data';
    $this->mk2->hari='Rabu';
    $this->mk2->jam='08.00';

    $this->load->model('matkul_model','mk3');
    $this->mk3->id=2;
    $this->mk3->matkul='Komunikasi Efektif';
    $this->mk3->hari='Kamis';
    $this->mk3->jam='10.00';

    $list_mk = [$this->mk1, $this->mk2, $this->mk3];
    $data['list_mk']=$list_mk;
    
    $this->load->view('matkul/index',$data);
    
    }
}
