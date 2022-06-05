<?php
class Dosen_model extends CI_Model {
    private $table = 'dosen';
    
    public function getAll(){
        $query = $this->db->get('dosen');
        return $query->result();
    }

    public function findById($id){
        //SELECT * FROM dosen where nidn=$id
        $this->db->where('nidn',$id);
        $query = $this->db->get('dosen');
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO dosen (nidn,nama,gender,tmp_lahir,tgl_lahir,lulusan)
            VALUES (?,?,?,?,?,?)";
        $this->db->query($sql,$data);
    }

    public function update($data){
        $sql = "UPDATE dosen SET nidn=?,nama=?,gender=?,tmp_lahir=?,tgl_lahir=?,lulusan=? WHERE nidn=?";
         $this->db->query($sql,$data);
    }

    public function delete($id){
        $sql = "DELETE FROM dosen where nidn=?";
        $this->db->query($sql,array($id));
    }
}
