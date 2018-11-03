<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Artikel_Model');
		$this->load->model('Kategori_Model');
		$this->load->helper('text');
	}

	public function index(){
		//get all artikel data
		$data['artikel_data'] = $this->Artikel_Model->get_all()->result_array();

		//cara menampilkan view dan passing data
		$this->load->view('home/index', $data);
	}

	public function detail($id_artikel){
		//get artikel by id
		$data['artikel_data'] = $this->Artikel_Model->get_by_id($id_artikel)->row_array();

		$this->load->view('home/detail', $data);
	}

}