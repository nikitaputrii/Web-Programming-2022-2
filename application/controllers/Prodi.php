<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class Prodi extends CI_Controller {

    public function index(){
        $this->load->model('prodi_model','prodi');
        $list_prodi = $this->prodi->getAll();

        $data['list_prodi'] = $list_prodi;
        $this->load->view('layouts/header');
        $this->load->view('prodi/index',$data);
        $this->load->view('layouts/footer');
    }
    public function create(){
        $data['judul']='Form Kelola Program Studi';
        
        $this->load->view('layouts/header');
        $this->load->view('prodi/create',$data);
        $this->load->view('layouts/footer');
    }
    public function save(){
        $this->load->model('prodi_model','prodi');

        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama');
        $_kaprodi = $this->input->post('kaprodi');
        
        $_idedit = $this->input->post('idedit'); //hidden field

        $data_ps[]=$_kode; // ? 1
        $data_ps[]=$_nama; // ? 2
        $data_ps[]=$_kaprodi; // ? 3
        
        if(isset($_idedit)){
            //update data lama
            $data_ps[]=$_idedit; // ? 8
            $this->prodi->update($data_ps);

        } else{ //save data baru
            //panggil fungsi save di model
            $this->prodi->save($data_ps);
        }
        
        redirect(base_url().'index.php/prodi/index', 'refresh');
    }
    public function edit(){
        $_id = $this->input->get('kode');
        $this->load->model('prodi_model','prodi');
        $psedit = $this->prodi->findById($_id);

        $data['judul']='Form Update Program Studi';
        $data['psedit']=$psedit;

        $this->load->view('layouts/header');
        $this->load->view('prodi/update',$data);
        $this->load->view('layouts/footer');
    }
    public function delete(){
        $_id = $this->input->get('kode');
        $this->load->model('prodi_model','prodi');
        $this->prodi->delete($_id);
        redirect(base_url().'index.php/prodi/index', 'refresh');

    }
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect('/login'); 
        }
    }
}