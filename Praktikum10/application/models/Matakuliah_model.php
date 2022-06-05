<?php
class Matakuliah_model extends CI_Model {
    private $table = 'matakuliah';

    public function getAll(){
        $query = $this->db->get('matakuliah');
        return $query->result();
    }

    public function findById($kode){
        //SELECT * FROM matakuliah where kode=$kode
        $this->db->where('kode',$kode);
        $query = $this->db->get('matakuliah');
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO matakuliah (kode,nama,hari,jam,sks,dosen,ruang)
            VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql,$data);
    }

    public function update($data){
        $sql = "UPDATE matakuliah SET kode=?,nama=?,hari=?,jam=?,sks=?,dosen=?,ruang=? WHERE kode=?";
         $this->db->query($sql,$data);
    }

    public function delete($kode){
        $sql = "DELETE FROM matakuliah where kode=?";
        $this->db->query($sql,array($kode));
    }
}
