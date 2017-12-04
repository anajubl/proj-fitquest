<?php
    class UsuarioDAO extends CI_Model{
        
        public function getUser($email,$senha){
            //SELECT * FROM Usuario WHERE
            //email = $email AND senha = $senha 
            $this->db->select('usuario.*,nivel.*,foco.*');
            $this->db->where('nm_email_usuario',$email);
		    $this->db->where('nm_senha_usuario',$senha);
            $this->db->join('nivel','usuario.cd_nivel = nivel.cd_nivel');
            $this->db->join('foco','usuario.cd_foco = foco.cd_foco');
		    $usr = $this->db->get('usuario');
		    require_once APPPATH."models/usuario.php";
		    if ($usr->num_rows()>0){
		        //SE FOSSEM VARIOS, FOR
		        $usuario = $usr->result()[0];
		        $nome = $usuario->nm_usuario;
		        $emailUsu = $usuario->nm_email_usuario;
		        $senhaUsu = $usuario->nm_senha_usuario;
		        $nivelUsu = $usuario->cd_nivel;
		        $nivelUsuNM = $usuario->nm_nivel;
		        $focoUsu = $usuario->cd_foco;
		        $focoUsuNM = $usuario->nm_foco;
		        $generoUsu = $usuario->ic_sexo_masculino;
		        print_r($usuario);
		        
		        return new UsuarioModel($nome,$emailUsu,$senhaUsu,$nivelUsu,$nivelUsuNM,$focoUsu,$focoUsuNM,$generoUsu);
            }else{
                return null;
            }
    
        }

        
        
        
    }
    
?>