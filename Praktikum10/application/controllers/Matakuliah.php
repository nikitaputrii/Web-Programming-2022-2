<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class Matakuliah extends CI_Controller {
    public function index()
    {
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;
            
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index',$data);
        $this->load->view('layouts/footer');
    }
    public function detail(){
        $_kode = $this->input->get('kode');
        $this->load->model('matakuliah_model');
        $data['mk'] = $this->matakuliah_model->findById($_kode);

        $this->load->view('layouts/header');
        $this->load->view('matakuliah/detail',$data);
        $this->load->view('layouts/footer');
    }
    public function create(){
        $data['judul']='Form Kelola Mata Kuliah';
        
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/create',$data);
        $this->load->view('layouts/footer');
    }
    public function save(){
        $this->load->model('matakuliah_model','matakuliah');

        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama');
        $_hari = $this->input->post('hari');
        $_jam  = $this->input->post('jam');
        $_sks = $this->input->post('sks');
        $_dosen = $this->input->post('dosen');
        $_ruang = $this->input->post('ruang');
        $_idedit = $this->input->post('idedit'); //hidden field

        $data_mk[]=$_kode; // ? 1
        $data_mk[]=$_nama; // ? 2
        $data_mk[]=$_hari; // ? 3
        $data_mk[]=$_jam; // ? 4
        $data_mk[]=$_sks; // ? 5
        $data_mk[]=$_dosen; // ? 6
        $data_mk[]=$_ruang; // ? 7
        
        if(isset($_idedit)){
            //update data lama
            $data_mk[]=$_idedit; // ? 8
            $this->matakuliah->update($data_mk);

        } else{ //save data baru
            //panggil fungsi save di model
            $this->matakuliah->save($data_mk);
        }
        
        redirect(base_url().'index.php/matakuliah/detail?kode='.$_kode, 'refresh');

        //die(print_r($this->mhs1));
    }
    public function edit(){
        $_kode = $this->input->get('kode');
        $this->load->model('matakuliah_model','matakuliah');
        $mkedit = $this->matakuliah->findById($_kode);

        $data['judul']='Form Update Mata Kuliah';
        $data['mkedit']=$mkedit;

        $this->load->view('layouts/header');
        $this->load->view('matakuliah/update',$data);
        $this->load->view('layouts/footer');
    }
    public function delete(){
        $_kode = $this->input->get('kode');
        $this->load->model('matakuliah_model','matakuliah');
        $this->matakuliah->delete($_kode);
        redirect(base_url().'index.php/matakuliah/index', 'refresh');

    }
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('/login'); 
        }
    }
    
}
