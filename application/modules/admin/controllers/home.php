<?php

class home extends MY_Controller{

	public function __construct(){
		parent::__construct();
	}
	public function index(){
//            $this->config->load('test');
//            $a = $this->config->item('dev');
//            print_r($a);
            
//            $this->load->config('abc', true);
//            $abc = $this->config->item('abc');
//            print_r($abc);
            
            $this->load->library('unit_test');
            $test = 1 + 1;

            $expected_result = 2;

            $test_name = 'Adds one plus one';

            echo $this->unit->run($test, $expected_result, $test_name);
	//exit($this->genUrl());
		$assign = array("action"=>"/admin/home/login/");
		$this->load->view('layout/login-form');
	}

	public function login(){
		$postData = $this->input->post();
		print_r($postData);
		exit();

	}

	public function import(){
		$this->load->view('layout/upload-form');
	}
        
        public function testmail() 
        {
            $name = $this->uri->segment('4');
            $name = urldecode($name);
            $assign = array('name' => $name);
            $template = $this->load->view('mail-template', $assign, true);

            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'd08thh1',
                'smtp_pass' => 'tinhoc08',
                'mailtype' => 'html',
                'charset' => 'utf-8'
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            $this->email->from('d08thh1@gmail.com', 'D08THH1');
            $this->email->to('tran.hieu.dao@gmail.com');
            $this->email->subject('Test smtp mail');
            $this->email->message($template);
            $result = $this->email->send();
            echo $this->email->print_debugger();
        }

}
