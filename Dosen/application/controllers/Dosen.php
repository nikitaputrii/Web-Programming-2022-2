<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class Dosen extends CI_Controller {
    public function index()
    {
    $this->load->model('dosen_model','ds1');
    $this->ds1->id=1;
    $this->ds1->nid='010001';
    $this->ds1->nama='Faisal Tanjung';
    $this->ds1->gender='L';
    $this->ds1->matkul='Bahasa Inggris';

    $this->load->model('dosen_model','ds2');
    $this->ds2->id=2;
    $this->ds2->nid='020001';
    $this->ds2->nama='Putri Syita';
    $this->ds2->gender='P';
    $this->ds2->matkul='Desain Digital';

    $this->load->model('dosen_model','ds3');
    $this->ds3->id=3;
    $this->ds3->nid='030001';
    $this->ds3->nama='Fatur Amin';
    $this->ds3->gender='L';
    $this->ds3->matkul='Cyber Security';

    $list_ds = [$this->ds1, $this->ds2, $this->ds3];
    $data['list_ds']=$list_ds;
    
    $this->load->view('dosen/index',$data);
    
    }
}
