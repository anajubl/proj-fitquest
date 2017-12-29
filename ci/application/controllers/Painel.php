<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {
   
   
 public function dashboard(){
		if($this->session->userdata("usuario")){
			$data["nome"] = $this->session->userdata("usuario")["nome"];
			$data["foco"] = $this->session->userdata("usuario")["foco"];
			$data["nivel"] = $this->session->userdata("usuario")["nivel"];
			$data["cd_foco"] = $this->session->userdata("usuario")["cd_foco"];
			$data["cd_nivel"] = $this->session->userdata("usuario")["cd_nivel"];
			$data["ds_email"] = $this->session->userdata("usuario")["ds_email"];
			
			$this->load->model('atividadedao');
			$data["vetor"] = $this->atividadedao->getAtiv($data["cd_foco"], $data["cd_nivel"]);

			$this->load->view('headerp');
			$this->load->view('dashboard',$data);
		}else{
			redirect('/login/form','refresh');
		}
	}
   
    
}

?>