<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class Dosen extends CI_Controller {
    public function index()
    {
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen'] = $dosen;
            
        $this->load->view('layouts/header');
        $this->load->view('dosen/index',$data);
        $this->load->view('layouts/footer');
    }
    public function detail(){
        $_nidn = $this->input->get('id');
        $this->load->model('dosen_model');
        $data['dosen'] = $this->dosen_model->findById($_nidn);

        $this->load->view('layouts/header');
        $this->load->view('dosen/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function create(){
        $data['judul']='Form Kelola Dosen';
        
        $this->load->view('layouts/header');
        $this->load->view('dosen/create',$data);
        $this->load->view('layouts/footer');
    }
    public function save(){
        $this->load->model('dosen_model','dosen');

        $_nidn = $this->input->post('nidn');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir  = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_lulusan = $this->input->post('lulusan');
        $_idedit = $this->input->post('idedit'); //hidden field

        $data_ds[]=$_nidn; // ? 1
        $data_ds[]=$_nama; // ? 2
        $data_ds[]=$_gender; // ? 3
        $data_ds[]=$_tmp_lahir; // ? 4
        $data_ds[]=$_tgl_lahir; // ? 5
        $data_ds[]=$_lulusan; // ? 6
        
        if(isset($_idedit)){
            //update data lama
            $data_ds[]=$_idedit; // ? 8
            $this->dosen->update($data_ds);

        } else{ //save data baru
            //panggil fungsi save di model
            $this->dosen->save($data_ds);
        }
        
        redirect(base_url().'index.php/dosen/detail?id='.$_nidn, 'refresh');

        //die(print_r($this->ds1));
    }
    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('dosen_model','dosen');
        $dsedit = $this->dosen->findById($_id);

        $data['judul']='Form Update Dosen';
        $data['dsedit']=$dsedit;

        $this->load->view('layouts/header');
        $this->load->view('dosen/update',$data);
        $this->load->view('layouts/footer');
    }
    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('dosen_model','dosen');
        $this->dosen->delete($_id);
        redirect(base_url().'index.php/dosen/index', 'refresh');

    }
}
