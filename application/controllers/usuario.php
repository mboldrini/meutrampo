<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Usuario extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session','form_validation','upload'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');

		$this->load->model('login_model');
		$this->load->model('Oportunidades_model');
	}
	
	public function index(){
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'usuario'){
			redirect(base_url().'login');
		}

		$id = $this->session->userdata('id_usuario');
		$nome = $this->session->userdata('nome');

		$data = array(
			'titulo' => 'Usuário - Painel',
			'ondeesta' => 'Painel',
			'descricao' => 'Você está no painel Principal!',
			'infos' => $this->login_model->get_byid($id)->result()

		);

		$this->load->view('usuario_painel',$data);
	}

	public function oportunidades(){
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'usuario'){
			redirect(base_url().'login');
		}

		$id = $this->session->userdata('id_usuario');
		$nome = $this->session->userdata('nome');

		$data = array(
			'titulo' => 'Oportunidades Disponíveis - Painel',
			'ondeesta' => 'Oportunidades',
			'descricao' => 'Você está na página de Oportunidades Disponíveis!',
			'tela'=>'oportunidades',
			'infos' => $this->login_model->get_byid($id)->result()

		);

		$this->load->view('usuario_oportunidades',$data);
	}


	public function perfilOportunidade(){

		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'usuario'){
			redirect(base_url().'login');
		}

		$id = $this->session->userdata('id_usuario');

		$dados = array(
			'titulo' => 'Ver Oportunidade - Meu Trampo',
			'ondeesta' => 'Oportunidade de Emprego',
			'descricao' => 'Você está visualizando uma oportunidade de Emprego!',
			'tela'=>'perfil',
			'infos' => $this->login_model->get_byid($id)->result(),
		);
		$this->load->view('usuario_oportunidades',$dados);
		
	}

	public function ASFASF(){

		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'usuario'){
			redirect(base_url().'login');
		}

		$id = $this->session->userdata('id_usuario');
		$dados = array(
			'titulo' => 'Meu Curriculum - Meu Trampo',
			'ondeesta' => 'Meu Curriculum',
			'descricao' => 'Essa é a página onde você envia o seu curriculum!',
			'tela'=>'curriculum',
			'infos' => $this->login_model->get_byid($id)->result(),
			'error'=>''
		);
		$this->load->view('usuario_oportunidades',$dados);
	}

	 public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload() )
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }

	

	

}