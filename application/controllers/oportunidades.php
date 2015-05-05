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

	public function nova(){

		$dados = array(
			'titulo' => 'Cadastrar Nova Oportunidade - Meu Trampo',
			'ondeesta' => 'Nova Oportunidade de Emprego',
			'descricao' => ' - Você está na Página de Cadastro de Oportunidades de emprego!',
			'tela'=>'nova'
		);

		$this->load->view('oportunidades',$dados);
	}

	public function perfil(){

		$dados = array(
			'titulo' => 'Ver Oportunidade - Meu Trampo',
			'ondeesta' => 'Oportunidade de Emprego',
			'descricao' => ' - Essa é a página de visualização de oportunidades de emprego!',
			'tela'=>'perfil'
		);

		$this->load->view('oportunidades',$dados);

	}

}
