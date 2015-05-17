<?php

class Upload extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->helper(array('form', 'url'));

            $this->load->library(array('session'));

            $this->load->model('login_model');
        }


        public function index(){

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

        public function do_upload(){

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 6666;
            $config['max_width']            = 5000;
            $config['max_height']           = 5000;

            $this->load->library('upload', $config);

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
                );

                $this->load->view('curriculum', $data);
            }

        }



}
?>