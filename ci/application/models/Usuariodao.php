<?php
    class UsuarioDAO extends CI_Model{
        
        public function getUser($email,$senha){
            //SELECT * FROM Usuario WHERE
            //email = $email AND senha = $senha 
            $this->db->where('nm_email_usuario',$email);
		    $this->db->where('nm_senha_usuario',$senha);
		    $usr = $this->db->get('usuario');
		    require_once APPPATH."models/usuario.php";
		    if ($usr->num_rows()>0){
		        //SE FOSSEM VARIOS, FOR
		        $usuario = $usr->result()[0];
		        $nome = $usuario->nm_usuario;
		        $emailUsu = $usuario->nm_email_usuario;
		        $senhaUsu = $usuario->nm_senha_usuario;
		        $nivelUsu = $usuario->cd_nivel;
		        $focoUsu = $usuario->cd_foco;
		        $generoUsu = $usuario->ic_sexo_masculino;
		        return new UsuarioModel($nome,$emailUsu,$senhaUsu,$nivelUsu,$focoUsu,$generoUsu);
            }else{
                return null;
            }
    
        }
    }
    
?>