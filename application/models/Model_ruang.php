<?php

class Model_ruang extends CI_Model{

    public function getAll(){
        return $this->db->get('daftar_ruang')->result_array();
    }
    public function simpan($data){
        $query = $this->db->insert("daftar_ruang", $data);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function hapus($id){
        $query = $this->db->delete("daftar_ruang", $id);
        if($query){
            return true;
        }else{
            return false;
        }
    }
}