<?php

class home extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('layout/login');
	}

	public function login(){
		$postData = $this->input->post();
		print_r($postData);
		exit();

	}

	public function import(){
		$this->load->view('layout/upload-form');
	}
	
}
