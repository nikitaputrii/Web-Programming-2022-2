<?php
class Matakuliah extends CI_Controller{

    public function index(){
        // load model
        $this->load->model('matakuliah_model');
        $matkul = $this->matakuliah_model->getAll();
        $data['matkul'] = $matkul;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model matakuliah
        $this->load->model('matakuliah_model');
        $matkul = $this->matakuliah_model->getById($id);
        $data['matkul'] = $matkul;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form(){
        // render view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        $this->load->model('matakuliah_model', 'matakuliah'); // 1
        $_nama = $this->input->post('nama');
        $_hari = $this->input->post('hari');
        $_jam = $this->input->post('jam');
        $_sks = $this->input->post('sks');
        $_kode = $this->input->post('kode');
        $_ruang = $this->input->post('ruang');

        $data_matakuliah['nama'] = $_nama;
        $data_matakuliah['hari'] = $_hari;
        $data_matakuliah['jam'] = $_jam;
        $data_matakuliah['sks'] = $_sks;
        $data_matakuliah['kode'] = $_kode;
        $data_matakuliah['ruang'] = $_ruang;

        if((!empty($_idedit))){ //update
            $data_matakuliah['id'] = $_idedit;
            $this->matakuliah->update($data_matakuliah);
        }else{
            //  data baru
            $this->matakuliah->simpan($data_matakuliah);
        }
        redirect('matakuliah','refresh');
    }
    public function edit($id){
        // akses model matakuliah
        $this->load->model('matakuliah_model','matakuliah');
        $obj_matkul = $this->matakuliah->getById($id);
        $data['obj_matkul'] = $obj_matkul;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('matakuliah_model','matakuliah');
        // Mengecek data matakuliah berdasarkan id
        $data_matakuliah['id'] = $id;
        $this->matakuliah->delete($data_matakuliah);
        redirect('matakuliah','refresh');
    }
public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('/login');
        }
    }
}
?>