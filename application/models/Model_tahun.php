<?php

class Model_tahun extends CI_Model{

    public function getAll(){
        return $this->db->get('daftar_tahun')->result_array();
        
    }
    public function simpan($data){
        $query = $this->db->insert("daftar_tahun", $data);
        if($query){
            return true;
        }else{
            return false;
        }

    }
    public function hapus($id){
        $query = $this->db->delete("daftar_tahun", $id);
        if($query){
            return true;
        }else{
            return false;
        }

    }
}