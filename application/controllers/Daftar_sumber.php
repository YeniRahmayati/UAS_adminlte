<?php


class Daftar_sumber extends CI_Controller{
    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_sumber'); 

    }
    public function index(){
        $this->load->model('model_sumber');
        $data['sumber']= $this->model_sumber->getAll();
        $data['contents']='daftar_sumber/index';
        $this->load->view('templates/index',$data);
    }
    public function tambah_sumber(){
        $data['contents'] = 'daftar_sumber/tambah_sumber';
        $this->load->view('templates/index', $data);
    }
    public function simpan(){
    $data = array(
            'sumber' => $this->input->post('sumber'),
            'ket_sumber' => $this->input->post('ket_sumber')
    );
    $this->model_sumber->simpan($data);
    redirect('Daftar_sumber/');
    }
    public function hapus($id_sumber){
        $id['id_sumber'] = $this->uri->segment(3);
        $this->model_sumber->hapus($id);
        redirect('Daftar_sumber/');
    }
}