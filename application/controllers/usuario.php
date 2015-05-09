<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Usuario extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');

		$this->load->model('login_model');
		$this->load->model('Oportunidades_model');
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'usuario'){
			redirect(base_url().'login');
		}

		/* pega o Id_usuario que veio da sessio e joga pra variavel id */
		$id = $this->session->userdata('id_usuario');
		$nome = $this->session->userdata('nome');

		$data = array(
			'titulo' => 'Empresa - Painel',
			'ondeesta' => 'Painel',
			'descricao' => 'Você está no painel Principal!',
			'infos' => $this->login_model->get_byid($id)->result()

		);

		$this->load->view('usuario_painel',$data);
	}
}