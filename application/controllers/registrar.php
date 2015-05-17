<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Registrar extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));

		/* validação dos formulários */
		$this->load->library('form_validation');

		$this->load->model('login_model');
		$this->load->model('Oportunidades_model');		

		$this->load->helper('array');


	}
	
	public function index(){	

		/* FORM VALIDATION */
		$this->form_validation->set_rules('perfil','Perfil','trim|required');		
		$this->form_validation->set_rules('username','Login','trim|required|max_length[200]|is_unique[users.username]');
		$this->form_validation->set_rules('nome','Nome','trim|required|max_length[200]');
		$this->form_validation->set_rules('email','Email','trim|required|max_length[200]|is_unique[users.email]');
		$this->form_validation->set_rules('password','Senha','trim|required|max_length[200]');


		$perfil = $this->input->post('perfil');
		$username = $this->input->post('username');
		$nome = $this->input->post('nome');
		$email = $this->input->post('email');
		$password = sha1($this->input->post('password') );

		if($this->form_validation->run() == TRUE){
			
			$dados = array('perfil'=>$perfil,'username'=>$username,'password'=>$password,'nome'=>$nome,'email'=>$email );

			$this->Oportunidades_model->registra_usuario($dados);
		}		

		$data = array(
			'titulo' => 'Criar Usuário - Meu Trampo',
		);

		$this->load->view('registrar',$data);
	}



}