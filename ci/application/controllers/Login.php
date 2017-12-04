<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function form(){
<<<<<<< HEAD
		$this->load->view("painel");
=======
		$this->load->view("login");
>>>>>>> 44d0a2157afb3ade268e57baaaea7bc27c2e1d9b
	}
	
	public function sair(){
		$this->session->unset_userdata("usuario");
		redirect('/login/form','refresh');
	}
	
	public function auth(){
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		require_once APPPATH."models/usuario.php";
		$this->load->model('usuariodao');
		$usrdao = $this->usuariodao;
		$usuario = $usrdao->getUser($email,$senha);
		if(isset($usuario)){
			$this->session->set_userdata("usuario",$usuario->getNome());
			redirect('/usuario/dashboard','refresh');			
<<<<<<< HEAD
		}else{
	
		redirect('/home','refresh');
		
	}
}

}
=======
		}
		//$this->session->set_userdata("msg","Usuário Cadastrado");
		redirect('/login/form','refresh');

	}
}

>>>>>>> 44d0a2157afb3ade268e57baaaea7bc27c2e1d9b
