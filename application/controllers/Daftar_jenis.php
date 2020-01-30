<?php

class Daftar_jenis extends CI_Controller{
    public function __construct(){

        parent ::__construct();
        $this->load->model('model_jenis'); 

    }

   
    public function index(){
        $this->load->model('Model_jenis');
        $data['jenis'] = $this->Model_jenis->getAll();
        $data['contents']='daftar_jenis/index';
		$this->load->view('templates/index' ,$data);
    }
    public function tambah_jenis(){
        $data['contents']='Daftar_jenis/tambah_jenis';
		$this->load->view('templates/index', $data);
    }
    public function simpan()
    {
        $data = array(
            'jenis'       => $this->input->post("jenis"),
            'ket_jenis'         => $this->input->post("ket_jenis")
        );

        $this->model_jenis->simpan($data);

        $this->session->set_flashdata
        ('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');
        redirect('Daftar_jenis/');

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
    public function hapus($id_jenis){
        $id['id_jenis'] = $this->uri->segment(3);
        $this->model_jenis->hapus($id);
        redirect('Daftar_jenis/');
    }

}
