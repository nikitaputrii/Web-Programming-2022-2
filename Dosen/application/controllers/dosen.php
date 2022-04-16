<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class Dosen extends CI_Controller {
    public function index()
    {
        $this->load->model('dosen_model','dsn1');
        $this->dsn1->id=1;
        $this->dsn1->nid='010001';
        $this->dsn1->nama='Tanjung Winanto';
        $this->dsn1->gender='L';

        $this->load->model('dosen_model','dsn2');
        $this->dsn2->id=2;
        $this->dsn2->nid='020001';
        $this->dsn2->nama='Sri Sumiyati';
        $this->dsn2->gender='P';

        $this->load->model('dosen_model','dsn3');
        $this->dsn3->id=3;
        $this->dsn3->nid='030001';
        $this->dsn3->nama='Tono Martono';
        $this->dsn3->gender='L';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn']=$list_dsn;
        
        $this->load->view('dosen/index',$data);
    }
}
