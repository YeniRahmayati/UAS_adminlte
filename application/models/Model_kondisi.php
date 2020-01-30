<?php

class Model_kondisi extends CI_Model{

    public function getAll(){
    return $this->db->get('daftar_kondisi')->result_array();
    }
    public function simpan($data)
    {

        $query = $this->db->insert("daftar_kondisi", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }
    
    public function hapus($id){
        $query = $this->db->delete('daftar_kondisi', $id);
        if($query){
            return true;
       }else{
           return false;
       }
    }
}