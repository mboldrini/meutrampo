<?php 

	$this ->load-> view('base/header_usuario');
	$this->load->view('base/sidebar_usuario');


	if($tela != ''){
		 $this -> load -> view('usuario_oportunidades/'.$tela);
	}


	$this->load->view('base/footer');