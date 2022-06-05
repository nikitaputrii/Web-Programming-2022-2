<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class Mahasiswa extends CI_Controller {
    public function index()
    {
        $this->load->model('mahasiswa_model');
        $mahasiswa = $this->mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;
            
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('layouts/footer');
    }
    public function detail(){
        $_nim = $this->input->get('id');
        $this->load->model('mahasiswa_model');
        $data['mhs'] = $this->mahasiswa_model->findById($_nim);

        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail',$data);
        $this->load->view('layouts/footer');
    }
    public function create(){
        $data['judul']='Form Kelola Mahasiswa';
        
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/create',$data);
        $this->load->view('layouts/footer');
    }
    public function save(){
        $this->load->model('mahasiswa_model','mahasiswa');

        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir  = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_prodi = $this->input->post('prodi');
        $_ipk = $this->input->post('ipk');
        $_idedit = $this->input->post('idedit'); //hidden field

        $data_mhs[]=$_nim; // ? 1
        $data_mhs[]=$_nama; // ? 2
        $data_mhs[]=$_gender; // ? 3
        $data_mhs[]=$_tmp_lahir; // ? 4
        $data_mhs[]=$_tgl_lahir; // ? 5
        $data_mhs[]=$_prodi; // ? 6
        $data_mhs[]=$_ipk; // ? 7
        
        if(isset($_idedit)){
            //update data lama
            $data_mhs[]=$_idedit; // ? 8
            $this->mahasiswa->update($data_mhs);

        } else{ //save data baru
            //panggil fungsi save di model
            $this->mahasiswa->save($data_mhs);
        }
        
        redirect(base_url().'index.php/mahasiswa/detail?id='.$_nim, 'refresh');

        //die(print_r($this->mhs1));
    }
    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('mahasiswa_model','mahasiswa');
        $mhsedit = $this->mahasiswa->findById($_id);

        $data['judul']='Form Update Mahasiswa';
        $data['mhsedit']=$mhsedit;

        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/update',$data);
        $this->load->view('layouts/footer');
    }
    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('mahasiswa_model','mahasiswa');
        $this->mahasiswa->delete($_id);
        redirect(base_url().'index.php/mahasiswa/index', 'refresh');

    }
}
