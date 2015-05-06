 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
	  <h1>
	    <?php echo $ondeesta ?>
	    <small><?php echo $descricao ?></small>
	  </h1>
	</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			
		<div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">EMPRESAAAAAAAAAAAAAAAAA</h3>
            </div>

            <?php 

                /* essa é uma variavel de idendificação do usuário a ser editado
                * essa variavel recebe o valor por meio da url, 
                * já o segment eu não faço a minima ideia mas ta funcionando */
                $iduser = $this->uri->segment(3);

                /* se o cara tentar acessar aluno/editar sem enviar informação, ele é redirecionado para a tela
                * de alunos cadastrados no sistema */
                if($iduser == NULL){
                  redirect('oportunidades/');
                }

                /* a variavel query é executada aqui,
                * chama o model Aluno_model,
                * chama a função get_byid( ) - passa a variavel de identificação do usuário a ser editado
                * o row pega a linha que está retornando do Aluno_model */ 
                $query = $this->Oportunidades_model->get_byid($iduser)->row();

              ?>

    
        <div class="panel-body">
          	<div class="row">
                <div class="col-md-3 col-lg-3 " align="center">
                	<img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
                    
                <div class=" col-md-9 col-lg-9 "> 
                  	<table class="table table-user-information">
                    	<tbody>
                    		<tr>
                        		<td>Área de Atuação:</td>
                        		<td><?php echo $query->area ?></td>
                      		</tr>
		                    <tr>
		                    	<td>Cargo:</td>
		                        <td><?php echo $query->cargo ?></td>
		                    </tr>
                     		<tr>
                        		<td>Estado</td>
                        		<td><?php echo $query->estado ?></td>
                      		</tr>                   
                     		<tr>
		                        <tr>
		                        	<td>Email para contato:</td>
		                        	<td><?php echo $query->email_contato ?></td>
		                      	</tr>
			                    <tr>
			                    	<td>Status</td>
			                        <td><?php echo $query->status ?></td>
			                    </tr>
                    			<tr>
			                    	<td>Descrição</td>
			                        <td>
                                <p>
                                  <?php echo $query->descricao ?>
                                </p>
                              </td>
			                    </tr>
			                    <tr>
			                    	<td>Benefícios</td>
			                        <td>XXX</td>
			                    </tr>
                       
                  			</tr>                     
                		</tbody>
              		</table>
              
              		<a href="#" class="btn btn-primary">Quero me Candidatar</a>
                </div>
          	</div>
        </div>
        
        <div class="panel-footer">
            <a data-original-title="Enviar Mensagem" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">
            	<i class="fa fa-envelope">Enviar Mensagem</i>
            </a>

            <span class="pull-right">

                <a href="edit.html" data-original-title="Editar Oportunidade" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning">
                	<i class="fa fa-pencil-square-o">Editar</i>
                </a>

                <a data-original-title="Remover Oportunidade" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger">
                	<i class="fa fa-trash-o">Excluir</i>
                </a>

            </span>

        </div>
        
      </div>
    </div>

		</div>
   

</section>		
</div>