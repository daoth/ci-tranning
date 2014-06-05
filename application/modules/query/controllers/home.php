<?php

class home extends MY_Controller{

	public function __construct(){
		parent::__construct();
	}
	public function index(){
            $this->load->model("test");
            $this->test->updateAlbum();
            $data = $this->test->test();

            $assign = array("action"=>"/admin/home/login/");
            $this->load->view('login', array('myname'=>'tran hieu dao', 'data'=>$data));
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
