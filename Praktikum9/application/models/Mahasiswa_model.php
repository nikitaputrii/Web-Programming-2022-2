<?php
class Mahasiswa_model extends CI_Model {
    private $table = 'mahasiswa';

    public function predikat(){
        $predikat = ($this->ipk >= 3.75)?"Cumlaude" : "Baik";
        return $predikat;
    }

    public function getAll(){
        //SELECT * FROM mahasiswa
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }

    public function findById($id){
        //SELECT * FROM mahasiswa where nim=$id
        $this->db->where('nim',$id);
        $query = $this->db->get('mahasiswa');
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO mahasiswa (nim,nama,gender,tmp_lahir,tgl_lahir,prodi,ipk)
            VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql,$data);
    }

    public function update($data){
        $sql = "UPDATE mahasiswa SET nim=?,nama=?,gender=?,tmp_lahir=?,tgl_lahir=?,prodi=?,ipk=? WHERE nim=?";
         $this->db->query($sql,$data);
    }

    public function delete($id){
        $sql = "DELETE FROM mahasiswa where nim=?";
        $this->db->query($sql,array($id));
    }
}
