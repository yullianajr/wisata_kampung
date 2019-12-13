<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kampung_wisata extends CI_Controller {

	public function index()
	{
		$this->load->model('Mkw');
		$data['admin']=$this->Mkw->ambil_kampung_wisata();
		$this->load->view('kw_view',$data);
	}
	public function tambah(){
		$post=$this->input->post();
		//untuk menerima inputan dari formulir
		if ($post) {
			$this->load->model('Mkw');
			$this->Mkw->tambah($post);
			redirect('kampung_wisata');
		}

		$this->load->view('admin_tambah');

	}
	public function hapus($id){
		$this->load->model('Mkw');
		$this->Mkw->hapus($id);
		redirect('kampung_wisata');

	}
	public function edit($id){
		$this->load->model('Mkw');
		$data['kampung_wisata']=$this->Mkw->ambil_satu_kampung_wisata($id);
		// digunakan untuk mengambil data admin yang mau diedit
		$this->load->view('edit_view',$data);
		}