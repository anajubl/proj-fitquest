<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lista extends CI_Controller {
   
   
   //pag table.php = minhas atividades
	public function table(){	
       if($this->session->userdata("usuario")){
			$data["nome"] = $this->session->userdata("usuario")["nome"];
			$data["foco"] = $this->session->userdata("usuario")["foco"];
			$data["nivel"] = $this->session->userdata("usuario")["nivel"];
			$data["cd_foco"] = $this->session->userdata("usuario")["cd_foco"];
			$data["cd_nivel"] = $this->session->userdata("usuario")["cd_nivel"];
			$data["ds_email"] = $this->session->userdata("usuario")["ds_email"];
			
			$this->load->model('atividadedao');
			$data["vetor"] = $this->atividadedao->getAtiv($data["cd_foco"], $data["cd_nivel"]);
        
        // $this->load->view('headerp');
        $this->load->view('table',$data);
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
	
	//UPDATE ativ: tira da lista minhas ativ e envia para ativ concluidas
	public function AtivConcluida(){
		//pega AtivID, ao clicar no OK
		
		// getAtivID
		
		//verAtividade
		
		
			nova session: ativConc
			load->view->tableAtivConcl
		
		if(isset($atividade)){
			$this->session->unset_userdata("atividade");
			
			
			//INSERIR ATIV EM EXERC: $this->db->insert('nm_atividade') into table exercicio in "nm_exercicio";
		
		
		}
		
	}

		
		
		
		
	/*
	
		$ativc = $this->input->post("ativc");
		$novoemail = $this->input->post("novoemail");
		$senha = $this->input->post("senha");
		require_once APPPATH."models/usuario.php";
		$this->load->model('usuariodao');
		$usr = $this->usuariodao;
		$usuario = $usr->AtualizaEmail($email,$senha,$novoemail);
		if(isset($usuario)){
			$this->session->unset_userdata("usuario");
			$this->db->update('nm_email_usuario');
			
	
	
		//usar getAtivID (id):
		//$this->load->model('atividadedao');
		//	$data["ativconcl"] = $this->atividadedao->getAtivID($id);
        
	
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

	
	*/
	
	
	
	
	
	
	
	
}

?>