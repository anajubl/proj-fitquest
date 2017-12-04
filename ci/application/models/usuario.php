<?php
    //REPRESENTA A TABELA ALUNO
    require_once APPPATH."models/serializable.php";
    require_once APPPATH."models/nameable.php";
    class UsuarioModel implements Serializablee, Nameable{
        private $nome, $email, $senha,$nivel,$nivelNM,$foco,$focoNM,$genero;
        
        public function __construct($nome, $email, $senha,$nivel,$nivelNM,$foco,$focoNM,$genero){
           
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
            $this->nivel = $nivel;
            $this->nivelNM = $nivelNM;
            $this->foco = $foco;
            $this->focoNM = $focoNM;
            $this->genero = $genero;
        }
        
        
        public function getNome(){
            return $this->nome;
        }
        
        public function getEmail(){
            return $this->email;
        }
        
        public function getSenha(){
            return $this->senha;
        }
        
          public function getNivel(){
            return $this->nivel;
        }
        
        public function getNivelNM(){
            return $this->nivelNM;
        }
        
        
          public function getFoco(){
            return $this->foco;
        }
        
          public function getFocoNM(){
            return $this->focoNM;
        }
        
         public function getGenero(){
            return $this->genero;
        }
        
//         public function getNomeNiveleFoco(){
//             $this->db->select('usuario.*, foco.nm_foco, nivel.nm_nivel');
//             $this->db->where('nm_email_usuario',$email);
// 		    $this->db->where('nm_senha_usuario',$senha);
// 		    $this->db->join('nivel', 'usuario.cd_nivel = nivel.cd_nivel');
// 			$this->db->join('foco', 'usuario.cd_foco = foco.cd_foco');
//         }
        
        //toArray DEVERA EXISTIR PARA TODAS AS TABELAS!
        //@Override
        public function toArray(){
            $aux = array();
            
            $aux["nm_usuario"] = $this->nome;
            $aux["nm_email_usuario"] = $this->email;
            $aux["nm_senha_usuario"] = $this->senha;
            $aux["cd_nivel"] = $this->nivel;
            $aux["cd_foco"] = $this->foco;
            $aux["ic_sexo_masculino"] = $this->genero;
            
            return $aux;
        }
        
        public function getClassName(){
            return "usuario";
        }
        
        public function foconome($foconome){
            return $foconome;
            
        }
    
        public function nivelnome(){
            
            
        }
        
        
    }
    
    
?>