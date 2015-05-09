<?php defined('BASEPATH') OR exit('No direct script access allowed');

class  Oportunidades_model extends CI_Model{

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

	/* essa aqui teoricamente é uma função que insere os dados no banco de dados
		 o foda é que em momento algum o cara falou algo relacionado a tabela a ser inserida (se falou não lembro) */
	public function do_insert($dados = NULL){
		
		// se a variavel $dados que veio do controller crud  for diferente de vazia, executa:
		if($dados != NULL){

			//insere na tabela curso_ci a variavel $dados
			$this->db->insert('oportunidades',$dados);

			// retorna uma flashdata de nome cadastrook e valor {} 
			// e depois redireciona para /crud/create que vai estar esperando essa flashdata
			$this->session->set_flashdata('cadastrook','Cadastro efetuado com sucesso');
			redirect('empresa/novaOportunidade');
		}
	}

		/* função de seleção por ID para posteriormente ir pra tela de edição */
	public function oportunidadesCadastradas( $empresa = NULL ){
		if( $empresa != NULL ){
			/* seleciona no DB onde o campo ID == $id */
			$this->db->where('empresa_responsavel',$empresa);
			
			/* mostra apenas 1 resultado, e TEM q ser 1 resultado pois ID é unico */
			//$this->db->limit(1);
			
			/* pega a tabela aluno */
			return $this->db->get('oportunidades');
		}else{
			return FALSE;			
		}
	}

	public function quantidadeOportunidadesCadastradas( $empresa = NULL ){
		if( $empresa != NULL ){

			$this->db->where('empresa_responsavel',$empresa);
					
			/* pega a tabela aluno */
			return $this->db->get('oportunidades')->num_rows();
			
		}else{
			return FALSE;			
		}
	}

	/* função de seleção por ID para posteriormente ir pra tela de edição */
	public function oportunidadesDisponiveis(){

			$query = $this->db->get('oportunidades');

			$num = $query->num_rows();
			
			return $num;

	}

}