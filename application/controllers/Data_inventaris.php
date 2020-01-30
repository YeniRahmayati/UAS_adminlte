<?php

class Data_inventaris extends CI_Controller{  
    public function __construct(){
    parent ::__construct();
    $this->load->model('model_data_inventaris'); 

}
    public function index(){
        $this->load->model('model_data_inventaris');
        $data['data_inventaris'] = $this->model_data_inventaris->getAll();
        $data['contents']='Data_inventaris/index';
		$this->load->view('templates/index',$data);
    }
    public function tambah_inventaris(){
        $data['contents']='Data_inventaris/tambah_inventaris';
		$this->load->view('templates/index', $data);
    }
    public function simpan(){
 
        $data = array (
            'tanggal' => $this->input->post("tanggal"),
            'kode_inv' => $this->input->post("kode_inv"),
            'nama_barang' => $this->input->post("nama_barang"),
            'merek'          => $this->input->post("merek"),
            'seri'           => $this->input->post("seri"),
            'nilai_wajar'    => $this->input->post("nilai_wajar"),
            'gambar'         => $this->do_upload()

        );
        $this->model_ruang->simpan($data);
        redirect('data_inventaris/');
    }
    // public function simpan(){
    //     $data = array(
    //         'tanggal'        => $this->input->post("tanggal"),
    //         'kode_inv'       => $this->input->post("kode_inv")
    //         'nama_barang'    => $this->input->post("nama_barang")
    //         'merek'          => $this->input->post("merek"),
    //         'seri'           => $this->input->post("seri"),
    //         'nilai_wajar'    => $this->input->post("nilai_wajar"),
    //         'gambar'         => $this->do_upload()

    //     );
    //     $this->model_data_inventaris->simpan($data);

    //     $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
    //                                             </div>');
    //     redirect('Data_inventaris/');

    // }

    public function hapus($id_kondisi){
        $id['id_inv'] = $this->uri->segment(3);
        $this->model_kondisi->hapus($id);
        redirect('Data_inventaris/');
    }
}