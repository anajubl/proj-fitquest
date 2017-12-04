<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	
	public function dashboard(){
		if($this->session->userdata("usuario")){
			$data["nome"] = $this->session->userdata("usuario");
			$this->load->view("painel",$data);
		}else{
			redirect('/login/form','refresh');
		}
	}

	public function cadastro(){
		$nome = $this->input->post("nome");
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		$genero = $this->input->post("genero");
		$foco = $this->input->post("foco");
		require_once APPPATH."models/usuario.php";
		$usr = new UsuarioModel($nome, $email, $senha,1,$foco,$genero);
		//NAO HA CONSTRUTOR NOS DAO'S
		$this->load->model('insertdao');
		$insdao = $this->insertdao;
		$insdao->insert($usr);
		$this->session->set_userdata("msg","Usuário Cadastrado");
		redirect('/home/form','refresh');
		//$this->load->view("home");
	}
	
}

