<?php

class Model_jenis extends CI_Model{

    public function getAll(){
        return $this->db->get('daftar_jenis')->result_array();
    }
    public function simpan($data)
    {

        $query = $this->db->insert("daftar_jenis", $data);

        if($query){
            return true;
        }else{
            return false;
        }
    }
    
  public function jenis_rules()
  {
      return [
          [
              'field' => 'jenis',
              'label' => 'jenis Barang',
              'rules'  => 'required',
              'errors' => array(
                  'required' => 'Field %s tidak boleh kosong'
              )
          ],
          [
              'field' => 'ket_jenis',
              'label' => 'ket jenis ',
              'rules'  => 'required',
              'errors' => array(
                  'required' => 'Field %s tidak boleh kosong'
              )
          ]
        ];
          
  }
  
  public function edit()
  {
      $post = $this->input->post();
      $db = $this->db;
      $db->set('jenis', $post['jenis']);
      $db->set('ket_jenis', $post['ket_jenis']);
      $db->where('id', $post['id']);
      $db->update('daftar_jenis');
      redirect('daftar_jenis');

  }
    public function hapus($id){
        $query = $this->db->delete('daftar_jenis', $id);
        if($query){
            return true;
       }else{
           return false;
       }
}
}