<?php

class Model_data_inventaris extends CI_Model{

    public function getAll(){
        return $this->db->get('data_inventaris')->result_array();
    }
    public function simpan($data)
    {

        $query = $this->db->insert("data_inventaris", $data);

        if($query){
            return true;
        }else{
            return false;
        }
 
    }
    public function hapus($id){
        $query = $this->db->delete('data_inventaris', $id);
        if($query){
            return true;
       }else{
           return false;
       }
}
}