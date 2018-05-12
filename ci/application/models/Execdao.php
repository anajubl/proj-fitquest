<?php

class ExecDAO extends CI_Model{
        
    //seleciona as atividades de acordo com o nivel e foco do usuario para aparecer no dash
        public function getExec($ds_email){
            $this->load->model('usuariodao');
            $usrid = $this->usuariodao->getId($ds_email);
            $this->db->select('exercicio.*');
            $this->db->where('exercicio.cd_id_usuario',$usrid);
		    $exercicio = $this->db->get('exercicio');
		    require_once APPPATH."models/exercicio.php";
		    $objs_exec = array();
		    
		    if ($exercicio->num_rows()>0){
        		
        		$execArray = array_map(function($exercicio){
    		        $id = $exercicio-> cd_id_usuario;
    		        $idexec = $exercicio->cd_atividade;
    		        $dsexec = $exercicio->ds_exercicio;
    		        $qtserie = $exercicio->qt_series;
    		        $qtrept = $exercicio->qt_repeticoes;
    		        $feito = $exercicio->ic_feito;
                    
    		        return new ExercicioModel($id,$idexec,$dsexec,$qtserie,$qtrept,$feito);
    		    }, $exercicio->result());
    		    return $execArray;
            }else{
                return null;
            }
    
        }
        
       //ativ q aparece no modal 
       public function getAtivID($id){
            $this->db->select('atividade.*');
            $this->db->where('cd_atividade',$id);
		    $atividades = $this->db->get('atividade');
		    $objs_ativi = array();
		    require_once APPPATH."models/atividade.php";
		    if ($atividades->num_rows()>0){ 
		            $atividade = $atividades->result()[0];
    		        $id = $atividade->cd_atividade;
    		        $nome = $atividade->nm_atividade;
    		        $ds = $atividade->ds_atividade;
    		        $nivel = $atividade->cd_nivel;
    		        $foco = $atividade->cd_foco;
                    
    		        return new AtividadeModel($id,$nome,$ds,$nivel,$foco);
            }else{
                return null;
            }
        }
        
        //depois, enviar ativ para tabela EXERCICIO
        //public function setAtivConcluida(){
            
        //}
        
        
}
            
      
?>