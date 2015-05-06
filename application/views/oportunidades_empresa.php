<?php 

	$this ->load-> view('base/header_empresa');
	$this->load->view('base/sidebar_empresa');


	if($tela != ''){
		 $this -> load -> view('oportunidades_empresa/'.$tela);
	}


	$this->load->view('base/footer');