<?php defined('BASEPATH') OR exit('No direct script access allowed');

class  Oportunidades_model extends CI_Model{

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
		$areasCadastradas = $this->db->get('area');
		
		return $areasCadastradas;
	}

	public function get_estados(){
		$estadosCadastrados = $this->db->get('estados');
		
		return $estadosCadastrados;
	}

	public function get_status(){
		$statusCadastrados = $this->db->get('status');

		return $statusCadastrados;
	}








	/***********************************************
	*											   *
	*	TUDO RELACIONADO As OPORTUNIDADES    	   *
	*											   *
	***********************************************/
	
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

	public function do_update($dados = NULL, $condicao = NULL){
		if ($dados != NULL && $condicao != NULL){

			/* atualiza o banco de dados aluno com os $dados usando a $condição */
			$this->db->update('oportunidades',$dados,$condicao);

			/* retorna para a view de alunos cadastrados uma mensagem  de edição ok */
			$this->session->set_flashdata('edicaook','Uhul! Uma oportunidade foi editada! - <div class="fa fa-smile-o"></div>');

			/* ao terminar de editar o registro vai para a tela de alunos cadastrados */
			redirect('empresa/oportunidades');
		}
	}

	public function do_delete($condicao = NULL){
		if ($condicao != NULL) {
			$this->db->delete('oportunidades',$condicao);

			$this->session->set_flashdata('exclusaook','Você excluiu uma oportunidade! - <div class="fa fa-smile-o"></div>');

			redirect('empresa/oportunidades');

		}
	}

	public function oportunidadesCadastradas( $empresa = NULL ){
		if( $empresa != NULL ){
			/* seleciona no DB onde o campo ID == $id */
			$this->db->where('empresa_responsavel',$empresa);
		
			return $this->db->get('oportunidades');
		}else{
			return FALSE;			
		}
	}

	public function quantidadeOportunidadesCadastradas( $empresa = NULL ){
		if( $empresa != NULL ){

			$this->db->where('empresa_responsavel',$empresa);
					
			return $this->db->get('oportunidades')->num_rows();
			
		}else{
			return FALSE;			
		}
	}

	public function oportunidadesDisponiveis(){

			$query = $this->db->get('oportunidades');

			$num = $query->num_rows();
			
			return $num;

	}

	public function todasOportunidades(){
		return $this->db->get('oportunidades');
	}

	public function quantidadeEmpresasCadastradas(){

		$tipo = 'empresa';

		$query = $this->db->where('perfil',$tipo);

		$query2 = $this->db->get('users');

		$nn = $query2->num_rows();
		
		return $nn;

	}

	public function quantidadeUsuariosCadastrados( ){

		$usuarios = 'usuario';

		$this->db->where('perfil',$usuarios);
				
		return $this->db->get('users')->num_rows();
	}


	public function registra_usuario($dados = NULL){
		
		// se a variavel $dados que veio do controller crud  for diferente de vazia, executa:
		if($dados != NULL){

			//insere na tabela curso_ci a variavel $dados
			$this->db->insert('users',$dados);

			// retorna uma flashdata de nome cadastrook e valor {} 
			// e depois redireciona para /crud/create que vai estar esperando essa flashdata
			$this->session->set_flashdata('usuariocriado','Usuário Registrado com Sucesso!');
			redirect('login');
		}
	}







	/***********************************************
	*											   *
	*	TUDO RELACIONADO AO CURRICULUMMMMMMMM	   *
	*											   *
	***********************************************/

	public function cadastraCurriculum($dados = NULL){
		
		if($dados != NULL){

			//insere na tabela curso_ci a variavel $dados
			$this->db->insert('curriculum',$dados);

			$this->session->set_flashdata('cadastreicurriculum','Parabéns! Você acabou de enviar um novo Curriculum!');
			redirect('upload/');

		}		
	}

	public function curriculumCadastrados( $dados = NULL ){
		if( $dados != NULL ){
			/* seleciona no DB onde o campo ID == $id */
			$this->db->where('idusuario',$dados);
		
			return $this->db->get('curriculum');
		}else{
			return FALSE;			
		}
	}

	public function exibeOcurriculum( $id = NULL ){
		if( $id != NULL ){

			$this->db->where('id',$id);
			
			/* mostra apenas 1 resultado, e TEM q ser 1 resultado pois ID é unico */
			$this->db->limit(1);
			
			return $this->db->get('curriculum');
		}else{
			return FALSE;			
		}
	}

	public function excluirCurriculum($condicao = NULL){
		if ($condicao != NULL) {
			$this->db->delete('curriculum',$condicao);	
			redirect('upload/');	
		}else{
			return false;
		}
	}

	public function queromecandidatar($dados = NULL){
		
		if($dados != NULL){

			$this->db->insert('candidatos',$dados);

			$this->session->set_flashdata('mecandidatei','Parabéns! Você acabou de se candidatar para uma Oportunidade de Emprego!');
			redirect('usuario/oportunidades');
		}
	}







	/********************************************
	*											*
	*		COISAS RELACIONADAS AO CANDIDATO 	*
	*											*
	********************************************/
	public function exibeOportunidades( $id = NULL ){
		if( $id != NULL ){

			$this->db->where('nomeempresa',$id);
			
			return $this->db->get('candidatos');
			
		}else{
			return FALSE;			
		}
	}

	public function nomeDoCandidato( $id = NULL ){
		if( $id != NULL ){

			$this->db->where('id',$id);

			$this->db->limit(1);
						
			return $this->db->get('users');
			
		}else{
			return FALSE;			
		}
	}

	public function curriculumDoCandidato( $id = NULL ){
		if( $id != NULL ){

			$this->db->where('idusuario',$id);
			
			/* mostra apenas 1 resultado, e TEM q ser 1 resultado pois ID é unico */
			$this->db->limit(1);
			
			return $this->db->get('curriculum');
		}else{
			return FALSE;			
		}
	}
	




}