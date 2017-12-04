<?php
<<<<<<< HEAD
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
=======
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function form(){
		$this->load->view("login");
	}
	
	public function sair(){
		$this->session->unset_userdata("usuario");
		redirect('/login/form','refresh');
	}
	
	public function auth(){
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		require_once APPPATH."models/usuario.php";
		$this->load->model('usuariodao');
		$usrdao = $this->usuariodao;
		$usuario = $usrdao->getUser($email,$senha);
		if(isset($usuario)){
			$this->session->set_userdata("usuario",$usuario->getNome());
			redirect('/usuario/dashboard','refresh');			
		}
		//$this->session->set_userdata("msg","Usuário Cadastrado");
		redirect('/login/form','refresh');

	}
}

>>>>>>> 44d0a2157afb3ade268e57baaaea7bc27c2e1d9b
