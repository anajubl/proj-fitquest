<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	
	public function cadastro(){
		$nome = $this->input->post("nome");
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		$genero = $this->input->post("genero");
		$foco = $this->input->post("foco");
		require_once APPPATH."models/usuario.php";
		$usr = new UsuarioModel($nome, $email, $senha,1,null,$foco,null,$genero);
		//NAO HA CONSTRUTOR NOS DAO'S
		$this->load->model('insertdao');
		$insdao = $this->insertdao;
		$insdao->insert($usr);
		$this->session->set_userdata("msg","Usuário Cadastrado com sucesso");
		redirect('/home/form','refresh');
		//$this->load->view("home");
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
				"ds_email" => $usuario->getEmail()
			];
			$this->session->set_userdata("usuario",$user);
			
			
			redirect('/painel/dashboard','refresh');			
		}else{
	
		redirect('/home','refresh');
		}
	}
	
	public function getID(){
		$email = $_POST["email"];
		require_once APPPATH."models/usuario.php";
		$this->load->model('usuariodao');
		$usrdao = $this->usuariodao;
		$id = $usrdao->getID($email);
		if(isset($id)){
			echo json_encode($id);
		}
	}
		

	
	public function verAtividade(){
		$id = $_POST["id"];
		require_once APPPATH."models/atividade.php";
		$this->load->model('atividadedao');
		$atividao = $this->atividadedao;
		$atividade = $atividao->getAtivID($id);
		if(isset($atividade)){
			$ativi = array(				
				"id" => $atividade->getCdativ(),
				"nome" => $atividade->getNomeativ(),
				"ds" => $atividade->getDsativ(),
				"foco" => ucwords($atividade->getCdnivel()),
				"nivel" => ucwords($atividade->getCdfoco())
			);
			echo json_encode($ativi);
			$this->session->set_userdata("atividade",$ativi);
		}else{
			echo "Não houve retorno do banco para $id";	
		}
	}

		public function AlteraPerfil(){
			$email = $this->input->post("email");
			$novoemail = $this->input->post("novoemail");
			$senha = $this->input->post("senha");
			require_once APPPATH."models/usuario.php";
			$this->load->model('usuariodao');
			$usr = $this->usuariodao;
			$usuario = $usr->AtualizaEmail($email,$senha,$novoemail);
			if(isset($usuario)){
				$this->session->unset_userdata("usuario");
				$this->db->update('nm_email_usuario');
				
			
			
		}
}

		public function DeletaUsuario(){
			$email = $this->input->post("email");
			$senha = $this->input->post("senha");
			require_once APPPATH."models/usuario.php";
			$this->load->model('usuariodao');
			$usr = $this->usuariodao;
			$usuario = $usr->ExcluirConta($email,$senha);
			
	
		}

}
	
	
	
