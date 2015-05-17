<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Registrar extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));

		/* validação dos formulários */
		$this->load->library('form_validation');

		$this->load->model('login_model');

		$this->load->helper('array');
	}
	
	public function index(){	

		/* FORM VALIDATION */
		$this->form_validation->set_rules('empresa_responsavel','Empresa Responsável','trim|required|max_length[200]');

		// Se a validação do formulário estiver tudo OK, executa a função
		if($this->form_validation->run() == TRUE){
			$dados = elements( array('perfil','username','email','password','nome','email'), $this->input->post());

			//abre o MODEL Oportunidades_model, chama a função do_insert e envia a variavel $dados
			//$this->Oportunidades_model->do_insert($dados,array('id'=>$this->input->post('idusuario') ) );
		}		

		$data = array(
			'titulo' => 'Criar Usuário - Meu Trampo',
		);

		$this->load->view('registrar',$data);
	}



}