<?php

class Daftar_satuan extends CI_Controller{
    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_satuan'); 

    }
    public function index(){
        // $this->load->model('model_satuan');
        $data['satuan'] = $this->model_satuan->getAll();
        $data['contents']='daftar_satuan/index';
		$this->load->view('templates/index',$data);
    }
    public function tambah_satuan(){
        $data['contents']='Daftar_satuan/tambah_satuan';
		$this->load->view('templates/index', $data);
    }
    public function simpan(){
        $data = array(
            'satuan' => $this->input->post("satuan"),
            'ket_satuan' => $this->input->post("ket_satuan")
        );
        $this->model_satuan->simpan($data);
        redirect('Daftar_satuan/');
    }
    public function hapus($id_satuan){
        $id['id_satuan'] = $this->uri->segment(3);
        $this->model_satuan->hapus($id);
        redirect('Daftar_satuan/');
    }
}