<?php

class Upload extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->helper(array('form', 'url'));

            $this->load->library(array('session'));

            $this->load->model('login_model');

            $this->load->model('Oportunidades_model');
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
                    'titulo' => 'Meu Curriculum - Painel',
                    'ondeesta' => 'Meu Curriculum',
                    'descricao' => '',
                    'tela'=>'cadastrado',
                    'infos' => $this->login_model->get_byid($id)->result()
                ));

        }

         public function enviarCurriculum(){

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
                    'titulo' => 'Enviar Curriculum - Painel',
                    'ondeesta' => 'Enviar Curriculum',
                    'descricao' => '',
                    'tela'=>'form',
                    'infos' => $this->login_model->get_byid($id)->result()
                ));

        }


        /* essa é a função que faz o upload dos arquivos para a pasta UPLOADS localizada na raiz do projeto */
        public function cadastraCurriculum(){

            /* não é um usuário cadastrado? nem tenta! pois você não vai conseguir acessar essa função! eahuaeuhae */
            if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'usuario'){
                redirect(base_url().'login');
            }

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
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

                $data = array(
                    'titulo' => 'DEU RUIM - Painel',
                    'ondeesta' => 'DEU RUIM',
                    'descricao' => '',
                    'upload_data' => $this->upload->data(),
                    'tela'=>'erro',
                    'infos' => $this->login_model->get_byid($id)->result(),
                    'upload_data' => $this->upload->data()
                );

                $this->load->view('curriculum', $data);

            }else{   

                $data = array(
                    'titulo' => 'Curriculum Cadastrado - Painel',
                    'ondeesta' => 'Curriculum Cadastrado',
                    'descricao' => '',
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