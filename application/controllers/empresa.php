<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Empresa extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session', 'form_validation'));
		$this->load->helper('form');
		$this->load->helper(array('url','array','form'));

		/* validação dos formulários */

		$this->load->model('login_model');

		$this->load->model('Oportunidades_model');

	}
	
	public function index(){	
		
		/* verifica se o perfil do usuário tem acesso a essa parte */
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'empresa'){
			redirect(base_url().'login');
		}

		/* pega o Id_usuario que veio da sessio e joga pra variavel id */
		$id = $this->session->userdata('id_usuario');
		$nome = $this->session->userdata('nome');

		// no EMAIL chama a função get_byid do MODEL login_model baseado na ID do usuário que veio do session 
		$data = array(
			'titulo' => 'Empresa - Painel',
			'ondeesta' => 'Painel',
			'descricao' => 'Você está no painel Principal!',
			'infos' => $this->login_model->get_byid($id)->result(),

		);

		$this->load->view('empresa_painel',$data);
	}

	public function oportunidades(){

		/* verifica se o perfil do usuário tem acesso a essa parte */
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'empresa'){
			redirect(base_url().'login');
		}

		/* pega o Id_usuario que veio da sessio e joga pra variavel id */
		$id = $this->session->userdata('id_usuario');

		$dados = array(
			'titulo' => 'Oportunidades - Meu Trampo',
			'ondeesta' => 'Oportunidades de Emprego',
			'descricao' => 'Você está na Página de oportunidades de emprego!',
			'tela'=>'oportunidades',
			'infos' => $this->login_model->get_byid($id)->result(),
			'estados' => $this->Oportunidades_model->get_estados()->result()
		);

		$this->load->view('empresa_oportunidades',$dados);

	}

	public function novaOportunidade(){

		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'empresa'){
			redirect(base_url().'login');
		}

		/* FORM VALIDATION */
		$this->form_validation->set_rules('empresa_responsavel','Empresa Responsável','trim|required|max_length[200]');
		$this->form_validation->set_rules('cargo','Cargo','trim|required|max_length[200]');
		$this->form_validation->set_rules('area','Área de Atuação','trim|required|max_length[200]');
		$this->form_validation->set_rules('estado','Estado','trim|required|max_length[200]');
		$this->form_validation->set_rules('email','Email','trim|required|max_length[200]');
		$this->form_validation->set_rules('status','Status','trim|required|max_length[200]');
		$this->form_validation->set_rules('descricao','Descricao','trim|max_length[255]');
		$this->form_validation->set_rules('vale_transporte','Vale Transporte','trim|max_length[20]');
		$this->form_validation->set_rules('ticket','Ticket','trim|max_length[20]');
		$this->form_validation->set_rules('plano_saude','Plano de Saúde','trim|max_length[20]');
		$this->form_validation->set_rules('pl','Participação nos Lucros','trim|max_length[20]');
		$this->form_validation->set_rules('outros','Outros','trim|max_length[20]');

		// Se a validação do formulário estiver tudo OK, executa a função
		if($this->form_validation->run() == TRUE){
			$dados = elements( array('empresa_responsavel','cargo','area','estado','email','status','descricao','vale_transporte','ticket','plano_saude','pl','outros'), $this->input->post());

			//abre o MODEL Oportunidades_model, chama a função do_insert e envia a variavel $dados
			$this->Oportunidades_model->do_insert($dados,array('id'=>$this->input->post('idusuario') ) );
		}

		/* ./FORM VALIDATION */

		/* pega o Id_usuario que veio da sessio e joga pra variavel id */
		$id = $this->session->userdata('id_usuario');
		$dados = array(
			'titulo' => 'Cadastrar Nova Oportunidade - Meu Trampo',
			'ondeesta' => 'Nova Oportunidade de Emprego',
			'descricao' => 'Você está na Página de Cadastro de Oportunidades de emprego!',
			'tela'=>'nova',			
			'infos' => $this->login_model->get_byid($id)->result(),
			'areas' => $this->Oportunidades_model->get_areas()->result(),
			'estados' => $this->Oportunidades_model->get_estados()->result()
		);

		$this->load->view('empresa_oportunidades',$dados);

	}

	public function editarOportunidade(){

		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'empresa'){
			redirect(base_url().'login');
		}

		/* FORM VALIDATION */
		$this->form_validation->set_rules('empresa_responsavel','Empresa Responsável','trim|required|max_length[200]');
		$this->form_validation->set_rules('cargo','Cargo','trim|required|max_length[200]');
		$this->form_validation->set_rules('area','Área de Atuação','trim|required|max_length[200]');
		$this->form_validation->set_rules('estado','Estado','trim|required|max_length[200]');
		$this->form_validation->set_rules('email','Email','trim|required|max_length[200]');
		$this->form_validation->set_rules('status','Status','trim|required|max_length[200]');
		$this->form_validation->set_rules('descricao','Descricao','trim|max_length[255]');
		$this->form_validation->set_rules('vale_transporte','Vale Transporte','trim|max_length[20]');
		$this->form_validation->set_rules('ticket','Ticket','trim|max_length[20]');
		$this->form_validation->set_rules('plano_saude','Plano de Saúde','trim|max_length[20]');
		$this->form_validation->set_rules('pl','Participação nos Lucros','trim|max_length[20]');
		$this->form_validation->set_rules('outros','Outros','trim|max_length[20]');

		// Se a validação do formulário estiver tudo OK, executa a função
		if($this->form_validation->run() == TRUE){
			$dados = elements( array('empresa_responsavel','cargo','area','estado','email','status','descricao','vale_transporte','ticket','plano_saude','pl','outros'), $this->input->post());

			//abre o MODEL Oportunidades_model, chama a função do_insert e envia a variavel $dados
			$this->Oportunidades_model->do_update($dados,array('id'=>$this->input->post('id') ) );
		}
		/* ./FORM VALIDATION */


		/* pega o Id_usuario que veio da sessio e joga pra variavel id */
		$id = $this->session->userdata('id_usuario');
		$dados = array(
			'titulo' => 'Editar Oportunidade - Meu Trampo',
			'ondeesta' => 'Editar Oportunidade de Emprego',
			'descricao' => 'Você está na Página de Edição das Oportunidades de emprego',
			'tela'=>'editar',	
			'infos' => $this->login_model->get_byid($id)->result(),
			'areas' => $this->Oportunidades_model->get_areas()->result(),
			'estados' => $this->Oportunidades_model->get_estados()->result(),
			'status' => $this->Oportunidades_model->get_status()->result()
		);

		$this->load->view('empresa_oportunidades',$dados);


	}

	public function excluirOportunidade(){

		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'empresa'){
			redirect(base_url().'login');
		}

		// Se a validação do formulário estiver tudo OK, executa a função
		if ( $this->input->post('id') > 0) {
			$this->Oportunidades_model->do_delete( array('id'=>$this->input->post('id') ) );
		}

		/* pega o Id_usuario que veio da sessio e joga pra variavel id */
		$id = $this->session->userdata('id_usuario');
		$dados = array(
			'titulo' => 'Excluir Oportunidade - Meu Trampo',
			'ondeesta' => 'Excluir Oportunidade de Emprego',
			'descricao' => 'Você está na Página de Exclusão de uma Oportunidade de emprego',
			'tela'=>'excluir',	
			'infos' => $this->login_model->get_byid($id)->result(),
			'areas' => $this->Oportunidades_model->get_areas()->result(),
			'estados' => $this->Oportunidades_model->get_estados()->result(),
			'status' => $this->Oportunidades_model->get_status()->result()
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
			'descricao' => 'Você está visualizando uma oportunidade de Emprego!',
			'tela'=>'perfil',
			'infos' => $this->login_model->get_byid($id)->result(),			
			'estados' => $this->Oportunidades_model->get_estados()->result()
		);
		$this->load->view('empresa_oportunidades',$dados);
		
	}

	public function candidatos(){

		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'empresa'){
			redirect(base_url().'login');
		}

		/* pega o Id_usuario que veio da sessio e joga pra variavel id */
		$id = $this->session->userdata('id_usuario');

		$dados = array(
			'titulo' => 'Candidatos - Meu Trampo',
			'ondeesta' => 'Candidatos',
			'descricao' => '',
			'tela'=>'candidatos',
			'infos' => $this->login_model->get_byid($id)->result()
		);
		$this->load->view('empresa_oportunidades',$dados);
		
	}

	public function vercandidato(){

		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'empresa'){
			redirect(base_url().'login');
		}

		/* pega o Id_usuario que veio da sessio e joga pra variavel id */
		$id = $this->session->userdata('id_usuario');

		$dados = array(
			'titulo' => 'Curriculum do Candidato - Meu Trampo',
			'ondeesta' => 'Curriculum do Candidato',
			'descricao' => '',
			'tela'=>'vercandidato',
			'infos' => $this->login_model->get_byid($id)->result()
		);
		$this->load->view('empresa_oportunidades',$dados);
		
	}






}