<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function form(){
		$this->load->view("painel");
	}
	
	public function sair(){
		$this->session->unset_userdata("usuario");
		redirect('/home/form','refresh');
	}
	
	public function auth(){
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		require_once APPPATH."models/usuario.php";
		$this->load->model('usuariodao');
		$usrdao = $this->usuariodao;
		$usuario = $usrdao->getUser($email,$senha);
		if(isset($usuario)){
			$user = [
				"nome" => $usuario->getNome(),
				"foco" => $usuario->getFocoNM(),
				"nivel" => $usuario->getNivelNM(),
				"cd_foco" => $usuario->getFoco(),
				"cd_nivel" => $usuario->getNivel(),
			];
			$this->session->set_userdata("usuario",$user);
			
			
			redirect('/usuario/dashboard','refresh');			
		}else{
	
		redirect('/home','refresh');
		
	}
}

}