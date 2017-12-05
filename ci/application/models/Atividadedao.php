<?php
    class AtividadeDAO extends CI_Model{
        
        public function getAtiv($cd_foco_user,$cd_nivel_user){
            $this->db->select('atividade.*');
            $this->db->where('atividade.cd_nivel',$cd_foco_user);
		    $this->db->where('atividade.cd_foco',$cd_nivel_user);
		    $atividades = $this->db->get('atividade');
		    require_once APPPATH."models/atividade.php";
		    if ($atividades->num_rows()>0){
        		$atividadesArray = array_map(function($atividades){
    		        $id = $atividades->cd_atividade;
    		        $nome = $atividades->nm_atividade;
    		        $ds = $atividades->ds_atividade;
    		        $nivel = $atividades->cd_nivel;
    		        $foco = $atividades->cd_foco;
    
    		        return new AtividadeModel($id,$nome,$ds,$nivel,$foco);
    		    }, $atividades->result());
    		    return $atividadesArray;
            }else{
                return null;
            }
    
        }

    }
?>