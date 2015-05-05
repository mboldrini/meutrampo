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
				
				<form class="form-horizontal">

					  <div class="form-group">
					  	<div class="col-md-12">
					  		<label for="asfasfaf">Área de Atuação:</label>
					  	</div>			    
					    <div class="col-md-3">
		      				<select class="form-control">
							  <option value="XXX">Infraestrutura</option>
							  <option value="XXX">Desenvolvimento</option>
							  <option value="XXX">Designer</option>
							  <option value="XXX">Outros</option>
							</select>
		    			</div><button type="button" class="btn btn-default fa fa-plus-circle btn-lg" data-toggle="modal" data-target="#nova_area_atuacao"></button>
					  </div>	

					  <div class="form-group">
					  	<div class="col-md-12">
					  		<label for="asfasfaf">Cargo:</label>
					  	</div>			    
					    <div class="col-md-4">
		      				<input type="text" class="form-control" id="cargo" placeholder="Cargo">
		    			</div>
					  </div>	

					  <div class="form-group">
					  	<div class="col-md-12">
					  		<label for="asfasfaf">Estado:</label>
					  	</div>			    
					    <div class="col-md-3">
		      				<select class="form-control">
							  <option value="XXX">Espírito Santo</option>
							  <option value="XXX">Minas Gerais</option>
							  <option value="XXX">Rio de Janeiro</option>
							  <option value="XXX">São Paulo</option>
							</select>
		    			</div>
					  </div>

					  <div class="form-group">
					  	<div class="col-md-12">
					  		<label for="asfasfaf">Cidade:</label>
					  	</div>			    
					    <div class="col-md-3">
		      				<select class="form-control">
							  <option value="XXX">CIDADE AQUI</option>
							  <option value="XXX">CIDADE AQUI</option>
							  <option value="XXX">CIDADE AQUI</option>
							  <option value="XXX">CIDADE AQUI</option>
							</select>
		    			</div><button type="button" class="btn btn-default fa fa-plus-circle btn-lg" data-toggle="modal" data-target="#nova_cidade_modal"></button>
					  </div>

					  <div class="form-group">
					  	<div class="col-md-12">
					  		<label for="asfasfaf">Email para contato:</label>
					  	</div>			    
					    <div class="col-md-4">
		      				<input type="email" class="form-control" id="email" placeholder="Email para contato">
		    			</div>
					  </div>

					  <div class="form-group">
					  	<div class="col-md-12">
					  		<label for="asfasfaf">Status:</label>
					  	</div>			    
					    <div class="col-md-3">
		      				<select class="form-control">
							  <option value="XXX">Precisando de Profissionais</option>
							  <option value="XXX">Realizando Entrevistas</option>
							  <option value="XXX">Realizando Contratações</option>
							  <option value="XXX">Concluido</option>
							</select>
		    			</div>
					  </div>

					  <div class="form-group">
					  	<div class="col-md-12">
					  		<label for="asfasfaf">Descrição:</label>
					  	</div>			    
					    <div class="col-md-4">
		      				<textarea class="form-control" rows="3" name="descricao" placeholder="Descrição do Cargo"></textarea>
		    			</div>
					  </div>

					  <div class="form-group">
					  	<div class="col-md-12">
					  		<label for="asfasfaf">Benefícios da empresa:</label>
					  	</div>			    
					    <div class="col-md-4">
		      				<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Vale Transporte
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox2" value="option2"> Ticket Alimentação
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox3" value="option3"> Plano de Saude
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox3" value="option3"> Participação nos lucros
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox3" value="option3"> Outros
							</label>
		    			</div>
					  </div>		  

					  <button type="submit" class="btn btn-primary">Cadastrar Oportunidade</button>

				</form>


			<!-- Modal -->
			<div class="modal fade" id="nova_area_atuacao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Cadastrar Nova Área de Atuação</h4>
			      </div>
			      <div class="modal-body">

			        <div class="row">
						<div class="col-md-6">				
							<form class="form-horizontal">

							  <div class="form-group">
							  	<div class="col-md-12">
							  		<label for="asfasfaf">Nova Área de Atuação:</label>
							  	</div>			    
							    <div class="col-md-12">
				      				<input type="text" class="form-control" id="cadastro_nova_area_atuacao" placeholder="Nova Área de Atuação">
				    			</div>
							  </div>

							</form>	
						</div><!--./col-md-6-->
					</div><!--./row-->


			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			        <button type="button" class="btn btn-primary">Ok</button>
			      </div>
			    </div>
			  </div>
			</div>	

			<!-- Modal -->
			<div class="modal fade" id="nova_cidade_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Cadastrar Nova Cidade</h4>
			      </div>
			      <div class="modal-body">
			        
					<div class="row">
						<div class="col-md-6">				
							<form class="form-horizontal">

							  <div class="form-group">
							  	<div class="col-md-12">
							  		<label for="asfasfaf">Nova Cidade:</label>
							  	</div>			    
							    <div class="col-md-12">
				      				<input type="text" class="form-control" id="cadastro_nova_cidade" placeholder="Nova Cidade">
				    			</div>
							  </div>

							</form>	
						</div><!--./col-md-6-->
					</div><!--./row-->


			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			        <button type="button" class="btn btn-primary">Ok</button>
			      </div>
			    </div>
			  </div>
			</div>	

			</div>
	    </div>
    </section>		
</div>