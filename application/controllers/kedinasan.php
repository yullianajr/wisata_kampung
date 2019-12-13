<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kedinasan extends CI_Controller {

	public function index()
	{
		$this->load->model('Mdinas');
		$data['kedinasan']=$this->Mdinas->ambil_admin();
		$this->load->view('admin_view',$data);
	}
	public function tambah(){
		$post=$this->input->post();
		//untuk menerima inputan dari formulir
		if ($post) {
			$this->load->model('Mdinas');
			$this->Mdinas->tambah($post);
			redirect('kedinasan');
		}

		$this->load->view('admin_tambah');

	}
	public function hapus($id){
		$this->load->model('Mdinas');
		$this->Mdinas->hapus($id);
		redirect('kedinasan');

	}
	public function edit($id){
		$this->load->model('Mdinas');
		$data['kedinasan']=$this->Mdinas->ambil_satu_admin($id);
		// digunakan untuk mengambil data admin yang mau diedit
		$this->load->view('edit_view',$data);
		}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */