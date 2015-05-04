<?php 

	$this ->load-> view('base/header');
	$this->load->view('base/sidebar');


	if($tela != ''){
		 $this -> load -> view('oportunidades/'.$tela);
	}


	$this->load->view('base/footer');