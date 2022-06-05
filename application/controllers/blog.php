<?php
    class blog extends CI_Controller {
        //membuat method index utk menampilkan data blog
        public function index() {
            //$data['nama'] = "CodeIgniter 3"; //buat ngirim data ke controller
            
            $data['mahasiswa'] = $mahasiswa;
            $this->load->view("mahasiswa/index",$data);
        }

        //membuat method add utk menambahkan data blog
        public function add() {
            $this->load->view("mahasiswa/add");
        }
    }
?>