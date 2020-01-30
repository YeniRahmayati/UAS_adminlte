<?php
 
 class Daftar_tahun extends CI_Controller{
    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_tahun'); 

    }
     public function index(){
        $this->load->model('model_tahun');
        $data['tahun'] = $this->model_tahun->getAll();
        $data['contents']='Daftar_tahun/index';
        $this->load->view('templates/index',$data);
     }
     public function tambah_tahun(){
         $data['contents'] = 'daftar_tahun/tambah_tahun';
         $this->load->view('templates/index', $data);
     }
     public function simpan(){
     $data = array(
         'tahun' => $this->input->post("tahun"),
         'ket_tahun' => $this->input->post("ket_tahun")
     );
     $this->model_tahun->simpan($data);
        redirect('Daftar_tahun/');
     }
     public function hapus($id_tahun){
         $id['id_tahun'] = $this->uri->segment(3);
         $this->model_tahun->hapus($id);
         redirect('Daftar_tahun/');
     }

 }