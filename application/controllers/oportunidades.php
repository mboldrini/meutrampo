<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oportunidades extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		

	}

	public function index(){

		$dados = array(
			'titulo' => 'Oportunidades - Meu Trampo',
			'ondeesta' => 'Oportunidades de Emprego',
			'descricao' => ' - Você está na Página de oportunidades de emprego!',
			'tela'=>'oportunidades'
		);

		$this->load->view('oportunidades',$dados);
	}
}
