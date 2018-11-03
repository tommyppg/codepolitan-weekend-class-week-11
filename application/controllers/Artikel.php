<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Artikel_Model');
		$this->load->model('Kategori_Model');
	}

	public function index(){
		//get all artikel data
		$data['artikel_data'] = $this->Artikel_Model->get_all()->result_array();

		//cara menampilkan view dan passing data
		$this->load->view('artikel/index', $data);
	}

	public function add(){
		//get all kategori data
		$data['kategori_data'] = $this->Kategori_Model->get_all()->result_array();

		$this->load->view('artikel/form', $data);
	}

	public function update($id_artikel){
		//get all kategori data
		$data['kategori_data'] = $this->Kategori_Model->get_all()->result_array();

		//ambil artikel by id, kemudian pakai row_array untuk fetch data nya
		$data['artikel_data'] = $this->Artikel_Model->get_by_id($id_artikel)->row_array();

		$this->load->view('artikel/form', $data);
	}

	public function process(){
		//get input form, key array tidak boleh asal, tp ikut ke field di table databasenya
		$id_artikel = $this->input->post('id_artikel');
		$data['judul_artikel'] = $this->input->post('judul_artikel');
		$data['isi_artikel'] = $this->input->post('isi_artikel');
		$data['author_artikel'] = $this->input->post('author_artikel');
		$data['id_kategori'] = $this->input->post('id_kategori');

		if(empty($id_artikel)){
			//panggil insert function dari model
			$result = $this->Artikel_Model->insert($data);
		}else{
			//panggil update function dari model
			$result = $this->Artikel_Model->update($id_artikel, $data);
		}
		

		if($result){
			//mengarahkan halaman ke fungsi yang diinginkan
			redirect('artikel');
		}else{
			echo "Gagal menyimpan data";
		}
	}

	public function delete($id_artikel){
		$result = $this->Artikel_Model->delete($id_artikel);

		if($result){
			//mengarahkan halaman ke fungsi yang diinginkan
			redirect('artikel');
		}else{
			echo "Gagal menghapus data";
		}
	}

}