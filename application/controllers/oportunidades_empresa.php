<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oportunidades_empresa extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');

		$this->load->helper('form');
		$this->load->helper('array');

		/* validação dos formulários */
		$this->load->library('form_validation');

		/* session do flash data de aviso de cadastro efetuado com sucesso no model*/
		$this->load->library('session');
		
		$this->load->model('Oportunidades_model');		

	}

	public function index(){

		$dados = array(
			'titulo' => 'Oportunidades - Meu Trampo',
			'ondeesta' => 'Oportunidades de Emprego',
			'descricao' => ' - Você está na Página de oportunidades de emprego!',
			'tela'=>'oportunidades',
			'oportunidades'=>$this->Oportunidades_model->exibe_oportunidades()->result()
		);

		$this->load->view('oportunidades_empresa',$dados);

	}


	public function nova(){

		$dados = array(
			'titulo' => 'Cadastrar Nova Oportunidade - Meu Trampo',
			'ondeesta' => 'Nova Oportunidade de Emprego',
			'descricao' => ' - Você está na Página de Cadastro de Oportunidades de emprego!',
			'tela'=>'nova',
			'areas' => $this->Oportunidades_model->get_areas()->result()
		);

		$this->load->view('oportunidades_empresa',$dados);

	}


	public function perfil(){

		$dados = array(
			'titulo' => 'Ver Oportunidade - Meu Trampo',
			'ondeesta' => 'Oportunidade de Emprego',
			'descricao' => ' - Essa é a página de visualização de oportunidades de emprego!',
			'tela'=>'perfil'
		);
		$this->load->view('oportunidades_empresa',$dados);
		
	}


}
