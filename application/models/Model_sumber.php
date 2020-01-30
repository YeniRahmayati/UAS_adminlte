<?php

class Model_sumber extends CI_Model{

    public function getAll(){
        return $this->db->get('daftar_sumber')->result_array();
    }
    public function simpan($data){
        $query = $this->db->insert('daftar_sumber ',$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function hapus($id){
        $query = $this->db->delete('daftar_sumber', $id);
        if($query){
            return true;
        }else{
            return false;
        }
    }
}