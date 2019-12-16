<?php defined ('BASEPATH') or exit ('No Direct Script Access Allowed');
class Kampungs extends CI_Controller {
	public function __construct() 
	{

		parent::__construct();
		$this -> load -> model("kampung_model");
		$this -> load -> library('form_validation');
	}
	
	public function index() {
		$data["kampungs"] = $this -> kampung_model -> getAll();
		$this -> load -> view ("admin/kampungwisata/list", $data);
	}
	
	public function add() {
		$kampungwisata = $this -> kampung_model;
		$validation = $this -> form_validation;
		$validation -> set_rules($kampungwisata -> rules());
		
		if($validation -> run()) {
				$kampungwisata -> save();
				$this -> session -> set_flashdata('success', 'Berhasil Disimpan');
		}
		
		$this -> load -> view("admin/kampungwisata/new_form");
	}
	
	public function edit ($id = null) {
		if (!isset($id)) redirect ('admin/kampungs');
		
		$kampungwisata = $this -> kampung_model;
		$validation = $this -> form_validation;
		$validation -> set_rules($kampungwisata -> rules()); 
		
		if($validation -> run()) {
				$kampungwisata -> update();
				$this -> session -> set_flashdata('success', 'Berhasil Disimpan');
		}
		
		$data["kampungwisata"] = $kampungwisata -> getById($id);
		if (!$data["kampungwisata"]) show_404();
		
		$this -> load -> view("admin/kampungwisata/edit_form", $data); 
	}
	
	public function hapus ($id) {
		$where = array ('id' => $id);
		$this -> kampung_model -> hapus_data ($where, 'kampungwisata');
		redirect ('admin/kampungs/index');
		
	}
	
	
}
?>