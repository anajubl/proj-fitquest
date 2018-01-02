<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Atividade extends CI_Controller {
    
  //API google calendar:
    public function agendar_ativ() {
    
    }
  
    
  public function AtivConcluida(){
    
    
  }    
    
    /*
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