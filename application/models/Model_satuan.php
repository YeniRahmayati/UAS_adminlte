<?php

class Model_satuan extends CI_Model{
    public function getAll(){
    return $this->db->get('daftar_satuan')->result_array();
    }
    public function simpan($data){
       $query = $this->db->insert('daftar_satuan', $data);
       if($query){
           return true;
       }else{
           return false;
       }
    }
    public function hapus($id){
        $query = $this->db->delete("daftar_satuan", $id);
        if($query){
            return true;
        }else{
            return false;
        }
    }
}