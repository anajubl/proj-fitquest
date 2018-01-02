<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index() {
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	//msg usuario cadastrado com sucesso:	
	public function form() {
		$data = array();
		$data["msg"] = $this->session->userdata("msg");
		$this->load->library('session');
		$this->load->view('header');
		$this->load->view('cadastrado',$data);
		$this->load->view('footer');
		$this->session->unset_userdata("msg");
	
	}

	//msg para dados de login incorretos	
	public function fail() {
		$data = array();
		$data["errol"] = $this->session->userdata("errol");
		$this->load->library('session');
		$this->load->view('header');
		$this->load->view('erro-login',$data);
		$this->load->view('footer');
		$this->session->unset_userdata("errol");
	
	}
	
	
	
}