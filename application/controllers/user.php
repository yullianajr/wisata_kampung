<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->model('Muser');
		$data['user']=$this->Muser->ambil_admin();
		$this->load->view('admin_view',$data);
	}
	public function tambah(){
		$post=$this->input->post();
		//untuk menerima inputan dari formulir
		if ($post) {
			$this->load->model('Muser');
			$this->Muser->tambah($post);
			redirect('user');
		}

		$this->load->view('admin_tambah');

	}
	public function hapus($id){
		$this->load->model('Muser');
		$this->Muser->hapus($id);
		redirect('user');

	}
	public function edit($id){
		$this->load->model('Muser');
		$data['user']=$this->Muser->ambil_satu_admin($id);
		// digunakan untuk mengambil data admin yang mau diedit
		$this->load->view('edit_view',$data);
		}