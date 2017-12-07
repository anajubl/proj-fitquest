<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
   
   
 public function dash(){
		if($this->session->userdata("usuario")){
			$data["nome"] = $this->session->userdata("usuario")["nome"];
			$data["foco"] = $this->session->userdata("usuario")["foco"];
			$data["nivel"] = $this->session->userdata("usuario")["nivel"];
			$data["cd_foco"] = $this->session->userdata("usuario")["cd_foco"];
			$data["cd_nivel"] = $this->session->userdata("usuario")["cd_nivel"];
			
			$this->load->model('atividadedao');
			$data["vetor"] = $this->atividadedao->getAtiv($data["cd_foco"], $data["cd_nivel"]);

			$this->load->view("headerp");
			$this->load->view("perfil",$data);
		}else{
			redirect('/login/form','refresh');
		}
	}
   
    
}

?>