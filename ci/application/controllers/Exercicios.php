<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Exercicios extends CI_Controller {
    
    public function InsereExercicios(){
       	require_once APPPATH."models/exercicio.php";
    	$exercicio = new ExercicioModel($_POST["cd_id_usuario"],$_POST["cd_atividade"],$_POST["ds_exercicio"],0,0,$_POST["ic_feito"]);
        $this->load->model('insertdao');
        $insdao = $this->insertdao;
		$insdao->insert($exercicio);
		                print_r("teste");exit;

		$this->session->set_userdata("msg","Parabéns! Atividade Realizada com Sucesso");
		redirect('/lista/table','refresh');
	}
}

?>