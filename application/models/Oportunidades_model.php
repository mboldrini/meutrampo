<?php defined('BASEPATH') OR exit('No direct script access allowed');

class  Oportunidades_model extends CI_Model{

	// pega todos os alunos cadastrados
	public function exibe_oportunidades(){
		return $this->db->get('oportunidades');
	}

	/* função de seleção por ID para posteriormente ir pra tela de edição */
	public function get_byid( $id = NULL ){
		if( $id != NULL ){
			/* seleciona no DB onde o campo ID == $id */
			$this->db->where('id',$id);
			
			/* mostra apenas 1 resultado, e TEM q ser 1 resultado pois ID é unico */
			$this->db->limit(1);
			
			/* pega a tabela aluno */
			return $this->db->get('oportunidades');
		}else{
			return FALSE;			
		}
	}

	public function get_areas(){
		return $this->db->get('area');
	}

}