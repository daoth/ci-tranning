<?php

class MY_Controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}
	public function getModuleName(){
		return $this->router->module;
	}
	public function getControllerName(){
		return $this->router->class;
	}
	public function getMethodName(){
		return $this->router->method;
	}
	public function genUrl($url = array()){
		$urlPart = "";
		$urlPart[0] = (isset($url['module'])&&$url['module']!='')?$url['module']:strtolower($this->getModuleName());
		$urlPart[1] = (isset($url['controller'])&&$url['controller']!='')?$url['controller']:strtolower($this->getControllerName());
		$urlPart[2] = (isset($url['method'])&&$url['method']!='')?$url['method']:strtolower($this->getMethodName());
		return implode("/", $urlPart);
	}
}


