<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_empresa extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');	
		/* session do flash data de aviso de cadastro efetuado com sucesso no model*/
		$this->load->library('session');

	}

	public function index(){

		$dados = array(
			'titulo' => 'Painel - Meu Trampo',
			'ondeesta' => 'Painel Principal',
			'descricao' => ' - Você está no Painel Principal!'
		);

		$this->load->view('painel_empresa',$dados);
		
	}

	
}
