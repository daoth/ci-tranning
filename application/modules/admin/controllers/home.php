<?php

class home extends MY_Controller{

	public function __construct(){
		parent::__construct();
	}
	public function index(){
	exit($this->genUrl());
		$assign = array("action"=>"/admin/home/login/");
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
