<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	
	

	
	
	
	public function form(){
		$data = array();
		$data["msg"] = $this->session->userdata("msg");
		$this->load->library('session');
		$this->load->view("cadastrado",$data);
		$this->session->unset_userdata("msg");
	
	}
}