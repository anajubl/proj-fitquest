<?php
    //REPRESENTA A TABELA ALUNO
    require_once APPPATH."models/serializable.php";
    require_once APPPATH."models/nameable.php";
    class AtividadeModel implements Serializablee, Nameable{
        private $cdativ,$nomeativ,$dsativ,$cdnivel,$cdfoco;
        
        public function __construct($cdativ,$nomeativ,$dsativ,$cdnivel,$cdfoco){
                
                $this->cdativ = $cdativ;
                $this->nomeativ = $nomeativ;
                $this->dsativ= $dsativ;
                $this->cdnivel = $cdnivel;
                $this->cdfoco = $cdfoco;
        }
        
        public function getCdativ(){
            return $this->cdativ;
        }
        
       public function getNomeativ(){
            return $this->nomeativ;
            
        }
        
        public function getDsativ(){
            return $this->dsativ;
        }
        
        public function getCdnivel(){
            return $this->cdnivel;
        }
        
        public function getCdfoco(){
            return $this->cdfoco;
        }
        
       
       
       
       
       
       
       
        public function toArray(){
            $aux = array();
            
            $aux["cd_atividade"] = $this->cdativ;
            $aux["nm_atividade"] = $this->nomeativ;
            $aux["ds_atividade"] = $this->dsativ;
            $aux["cd_nivel"] = $this->cdnivel;
            $aux["cd_foco"] = $this->cdfoco;

            return $aux;
        }
        
        public function getClassName(){
            return "atividade";
        }
        
       
        
    }
    
    
?>