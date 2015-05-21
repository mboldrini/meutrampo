<?php

class Upload extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->helper(array('form', 'url'));

            $this->load->library(array('session'));

            $this->load->model('login_model');
        }


        public function index(){

            /* não é um usuário cadastrado? nem tenta! pois você não vai conseguir acessar essa função! eahuaeuhae */
            if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'usuario'){
                redirect(base_url().'login');
            }

            $id = $this->session->userdata('id_usuario');
            $nome = $this->session->userdata('nome');

            $this->load->view(
                'curriculum',
                array(
                    'error' => ' ',
                    'titulo' => 'Upload de Curriculum - Painel',
                    'ondeesta' => 'Upload de Curriculum',
                    'descricao' => 'UPLOAD DE CURRICULUM',
                    'tela'=>'form',
                    'infos' => $this->login_model->get_byid($id)->result()
                ));

        }

        /* essa é a função que faz o upload dos arquivos para a pasta UPLOADS localizada na raiz do projeto */
        public function do_upload(){

            /* não é um usuário cadastrado? nem tenta! pois você não vai conseguir acessar essa função! eahuaeuhae */
            if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'usuario'){
                redirect(base_url().'login');
            }

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 6666;
            $config['max_width']            = 5000;
            $config['max_height']           = 5000;

            /* library do CI responsável pelo upload de arquivos, e passa para ela as configurações definidas aqui em cima */
            $this->load->library('upload', $config);

            /* informações do usuário que vem pela session do navegador */
            $id = $this->session->userdata('id_usuario');
            $nome = $this->session->userdata('nome');


            if ( ! $this->upload->do_upload() ){
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('curriculum', $error);
            }else{                    
                $data = array(
                    'titulo' => 'Upload de Curriculum - Painel',
                    'ondeesta' => 'Upload de Curriculum',
                    'descricao' => 'UPLOAD DE CURRICULUM',
                    'upload_data' => $this->upload->data(),
                    'tela'=>'sucesso',
                    'infos' => $this->login_model->get_byid($id)->result(),
                    'upload_data' => $this->upload->data()
                );

                $this->load->view('curriculum', $data);
            }

        }



}
?>