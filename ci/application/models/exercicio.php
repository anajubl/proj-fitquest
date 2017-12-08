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
        
        public function getQtseries(){
            return $this->qtseries;
        }
        
        public function getQtreps(){
            return $this->qtreps;
        }
        
        public function getFeito(){
            return $this->feito;
        }
        
       
       
       
       
       
        public function toArray(){
            $aux = array();
            
            $aux["cd_id_usuario"] = $this->idusr;
            $aux["cd_atividade"] = $this->idatividade;
            $aux["ds_exercicio"] = $this->dsexe;
            $aux["qt_series"] = isset($this->qtseries) ? $this->qtseries : 0;
            $aux["qt_repeticoes"] = isset($this->qtreps) ? $this->qtreps : 0 ;
            $aux["ic_feito"] = $this->feito;


            return $aux;
        }
        
        public function getClassName(){
            return "exercicio";
        }
        
       
        
    }
    
    
?>