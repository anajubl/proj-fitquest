<?php
    //REPRESENTA A TABELA ALUNO
    require_once APPPATH."models/serializable.php";
    require_once APPPATH."models/nameable.php";
    class UsuarioModel implements Serializablee, Nameable{
        private $id, $nome, $email, $senha,$nivel,$foco,$genero;
        
<<<<<<< HEAD
        public function __construct($nome, $email, $senha,$nivel,$foco,$genero){
           
=======
        public function __construct( $nome, $email, $senha,$nivel,$foco,$genero){
>>>>>>> 44d0a2157afb3ade268e57baaaea7bc27c2e1d9b
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
            $this->nivel = $nivel;
            $this->foco = $foco;
            $this->genero = $genero;
        }
        
<<<<<<< HEAD
        
=======
       
>>>>>>> 44d0a2157afb3ade268e57baaaea7bc27c2e1d9b
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
        
        
          public function getFoco(){
            return $this->foco;
        }
        
         public function getGenero(){
            return $this->genero;
        }
        
        //toArray DEVERA EXISTIR PARA TODAS AS TABELAS!
        //@Override
        public function toArray(){
            $aux = array();
<<<<<<< HEAD
            
=======
           
>>>>>>> 44d0a2157afb3ade268e57baaaea7bc27c2e1d9b
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
        
<<<<<<< HEAD
        public function isAdmin(){
            if($this->email == "root@root.com" && $this->senha == "root")
                return true;
            else 
                return false;
        }
=======
        
>>>>>>> 44d0a2157afb3ade268e57baaaea7bc27c2e1d9b
    }
?>