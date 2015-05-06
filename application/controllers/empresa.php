<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Empresa extends CI_Controller {
	
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
	
	public function index()
	{	
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'empresa'){
			redirect(base_url().'login');
		}

		/* pega o Id_usuario que veio da sessio e joga pra variavel id */
		$id = $this->session->userdata('id_usuario');

		// no EMAIL chama a função get_byid do MODEL login_model baseado na ID do usuário que veio do session 
		$data = array(
			'titulo' => 'Empresa - Painel',
			'ondeesta' => 'Painel',
			'descricao' => 'Você está no painel Principal!',
			'infos' => $this->login_model->get_byid($id)->result()
		);

		$this->load->view('empresa_painel',$data);
	}

	public function oportunidades(){

		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'empresa'){
			redirect(base_url().'login');
		}

		/* pega o Id_usuario que veio da sessio e joga pra variavel id */
		$id = $this->session->userdata('id_usuario');

		$dados = array(
			'titulo' => 'Oportunidades - Meu Trampo',
			'ondeesta' => 'Oportunidades de Emprego',
			'descricao' => ' - Você está na Página de oportunidades de emprego!',
			'tela'=>'oportunidades',
			'infos' => $this->login_model->get_byid($id)->result(),
			'oportunidades'=>$this->Oportunidades_model->exibe_oportunidades()->result()
		);

		$this->load->view('empresa_oportunidades',$dados);

	}

	public function novaOportunidade(){

		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'empresa'){
			redirect(base_url().'login');
		}

		/* pega o Id_usuario que veio da sessio e joga pra variavel id */
		$id = $this->session->userdata('id_usuario');

		$dados = array(
			'titulo' => 'Cadastrar Nova Oportunidade - Meu Trampo',
			'ondeesta' => 'Nova Oportunidade de Emprego',
			'descricao' => ' - Você está na Página de Cadastro de Oportunidades de emprego!',
			'tela'=>'nova',			
			'infos' => $this->login_model->get_byid($id)->result(),
			'areas' => $this->Oportunidades_model->get_areas()->result()
		);

		$this->load->view('empresa_oportunidades',$dados);

	}

	public function perfilOportunidade(){

		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'empresa'){
			redirect(base_url().'login');
		}

		/* pega o Id_usuario que veio da sessio e joga pra variavel id */
		$id = $this->session->userdata('id_usuario');

		$dados = array(
			'titulo' => 'Ver Oportunidade - Meu Trampo',
			'ondeesta' => 'Oportunidade de Emprego',
			'descricao' => ' - Essa é a página de visualização de oportunidades de emprego!',
			'tela'=>'perfil',
			'infos' => $this->login_model->get_byid($id)->result(),
		);
		$this->load->view('empresa_oportunidades',$dados);
		
	}





}