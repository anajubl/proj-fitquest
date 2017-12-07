<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lista extends CI_Controller {
   
   public function table(){	
       if($this->session->userdata("usuario")){
			$data["nome"] = $this->session->userdata("usuario")["nome"];
			$data["foco"] = $this->session->userdata("usuario")["foco"];
			$data["nivel"] = $this->session->userdata("usuario")["nivel"];
			$data["cd_foco"] = $this->session->userdata("usuario")["cd_foco"];
			$data["cd_nivel"] = $this->session->userdata("usuario")["cd_nivel"];
			
			$this->load->model('atividadedao');
			$data["vetor"] = $this->atividadedao->getAtiv($data["cd_foco"], $data["cd_nivel"]);
        
        // $this->load->view('headerp');
        $this->load->view('table',$data);

/* pegar func dashboard */

    }
 
   
    
}
}

?>