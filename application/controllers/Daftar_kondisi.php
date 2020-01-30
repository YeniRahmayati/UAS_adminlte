<?php

class Daftar_kondisi extends CI_Controller{  
    public function __construct(){
    parent ::__construct();
    $this->load->model('model_kondisi'); 

}
    public function index(){
        $this->load->model('Model_kondisi');
        $data['kondisi'] = $this->Model_kondisi->getAll();
        $data['contents']='daftar_kondisi/index';
		$this->load->view('templates/index',$data);
    }
    public function tambah_kondisi(){
        $data['contents']='Daftar_kondisi/tambah_kondisi';
		$this->load->view('templates/index', $data);
    }
    public function simpan(){
        $data = array(
            'kondisi'       => $this->input->post("kondisi"),
            'ket_kondisi'         => $this->input->post("ket_kondisi")
        );

        $this->model_kondisi->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');
        redirect('Daftar_kondisi/');

    }
    public function edit()
	{
		$model = $this->model_jenis;
		$validation = $this->form_validation;
		$validation->set_rules($model->barang_rules());
		if ($validation->run()) {
			$model->edit();
		} else {
			$id = $this->uri->segment('3');
			$data['jenis'] = $this->db->get_where('jenis', ['id' => $id])->row();
			admin_page('edit_form', $data);
		}
	}
    public function hapus($id_kondisi){
        $id['id_kondisi'] = $this->uri->segment(3);
        $this->model_kondisi->hapus($id);
        redirect('Daftar_kondisi/');
    }
}