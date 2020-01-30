<?php

class Daftar_ruang extends CI_Controller{
    public function __construct(){

        parent ::__construct();
    
        //load model
        $this->load->model('model_ruang'); 
        $this->load->helper(array('form', 'url'));
    
    }

    public function index(){
        $this->load->model('model_ruang');
        $data['ruang'] = $this->model_ruang->getAll();
        $data['contents']='daftar_ruang/index';
		$this->load->view('templates/index',$data);
    }
    public function tambah_ruang(){
        $data['contents']='Daftar_ruang/tambah_ruang';
		$this->load->view('templates/index', $data);
    }
    public function do_upload() {
        // setting konfigurasi upload
        $config['upload_path'] = 'img/';
        $config['allowed_types'] = 'gif|jpg|png';
        // load library upload
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
           return $this->upload->data('file_name');
        } else {
            
          return "noimage.jpg";
        }
    }
    public function simpan(){
 
        $data = array (
            'nama_ruangan' => $this->input->post("nama_ruangan"),
            'fungsi_ruangan' => $this->input->post("fungsi_ruangan"),
            'luas' => $this->input->post("luas"),
            'gbr_ruangan' => $this->do_upload()

        );
        $this->model_ruang->simpan($data);
        redirect('daftar_ruang/');
    }
    public function hapus($id_ruang){
        $id["id_ruang"] = $this->uri->segment(3);
        $this->model_ruang->hapus($id);
        redirect('daftar_ruang/');
    }
}