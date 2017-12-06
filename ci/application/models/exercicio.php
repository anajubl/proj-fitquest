<?php
    //REPRESENTA A TABELA ALUNO
    require_once APPPATH."models/serializable.php";
    require_once APPPATH."models/nameable.php";
    class ExercicioModel implements Serializablee, Nameable{
        private $idusr,$idatividade,$dsex,$qtseries,$qtreps,$feito;
        
        public function __construct( $idusr,$idatividade,$dsexe,$qtseries,$qtreps,$feito){
                
                $this->idusr = $idusr;
                $this->idatividade = $idatividade;
                $this->dsexe= $dsexe;
                $this->qtseries = $qtseries;
                $this->qtreps = $qtreps;
                $this->feito = $feito;
        }
        
        public function getIdusr(){
            return $this->idusr;
        }
        
       public function getIdAtividade(){
            return $this->idatividade;
            
        }
        
        public function getDsativ(){
            return $this->dsativ;
        }
        
        public function getDsexe(){
            return $this->dsexe;
        }
        
        public function getCdfoco(){
            return $this->cdfoco;
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
            return "exercicio";
        }
        
       
        
    }
    
    
?>