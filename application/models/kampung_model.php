<?php defined ('BASEPATH') or exit ('No Direct Script Access Allowed');
class Kampung_model extends CI_Model {
	private $_table = "kampungwisata";
	
	public $id;
	public $nama;
	public $deskripsi;
	public $aktivitas;
	public $fasilitas;
	public $transportasi;
	
	public function rules() {
		return [
			['field' => 'nama',
			'label' => 'Nama',
			'rules' => 'required'],
			
			['field' => 'deskripsi',
			'label' => 'Deskripsi',
			'rules' => 'required'],
			
			['field' => 'aktivitas',
			'label' => 'Aktivitas',
			'rules' => 'required'],
			
			['field' => 'fasilitas',
			'label' => 'Fasilitas',
			'rules' => 'required'],
			
			['field' => 'transportasi',
			'label' => 'Transportasi',
			'rules' => 'required'],
		];
	}
	
	public function getAll() {
			return $this -> db -> get($this ->_table) -> result();
	}
	
	public function getById($id) {
			return $this -> db -> get_where($this ->_table, ["id" => $id]) -> row();
	}
	
	public function save () {
		$post = $this -> input -> post();
		$this -> id = uniqid();
		$this -> nama = $post["nama"];
		$this -> deskripsi = $post["deskripsi"];
		$this -> aktivitas = $post["aktivitas"];
		$this -> fasilitas = $post["fasilitas"];
		$this -> transportasi = $post["transportasi"];
		$this -> db -> insert($this ->_table, $this);
	}
	
	public function update () {
		$post = $this -> input -> post();
		$this -> id = $post["id"];
		$this -> nama = $post["nama"];
		$this -> deskripsi = $post["deskripsi"];
		$this -> aktivitas = $post["aktivitas"];
		$this -> fasilitas = $post["fasilitas"];
		$this -> transportasi = $post["transportasi"];
		$this -> db -> update($this ->_table, $this, array('id' => $post['id']));
	}
	
		public function hapus_data ($where, $table) {
			$this -> db -> where($where);
			$this -> db -> delete($table);
	}
}

?>
	