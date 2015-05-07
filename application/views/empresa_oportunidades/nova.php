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

				<?php echo validation_errors(
                  '<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">
                        &times;
                      </span>
                    </button>'
                ,
                  '</div>'
                ); 
              ?>

              <?php 
                  if($this->session->flashdata('cadastrook')){
                    echo '<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">
                        &times;
                      </span>
                    </button>'.$this->session->flashdata('cadastrook').'</div>';
                  }
               ?>

               	<?php 
          			foreach ($infos as $info) {
            			$nome = $info->nome;
          			}
        		?>
				
				<?php echo form_open('empresa/novaOportunidade',array('class'=>'form-horizontal'))?>

					<div class="form-group">
					  	<div class="col-md-12">
					  		<label for="empresa_responsavel"><?php echo form_label('Empresa Responsável:', 'Empresa Responsável') ?></label>
					  	</div>			    
					    <div class="col-md-3 col-xs-8">
		      				<?php echo form_input(
		                        array(
		                          'name'=>'empresa_responsavel',
		                          'type'=>'text',
		                          'readonly'=>'readonly',
		                          'value' => $nome
		                        ),
		                        
		                        set_value('empresa_responsavel'),
		                          'class="form-control"')
		                      ?>
	    				</div>
				  	</div>	

					  <div class="form-group">
					  	<div class="col-md-12">
					  		<label for="area_atuacao"><?php echo form_label('Área de atuação:', 'Área de atuação') ?></label>
					  	</div>			    
					    <div class="col-md-3 col-xs-8">
		      				<select class="form-control" name="area">
								<?php foreach ($areas as $area) { ?>
                            		<option value="<?php echo $area->area ?>"><?php echo $area->area ?></option>
                        		<?php } ?>
							</select>
		    			</div>
					  </div>	

					  <div class="form-group">
					  	<div class="col-md-12">
					  		<label for="cargo"><?php echo form_label('Cargo:', 'Cargo') ?></label>
					  	</div>			    
					    <div class="col-md-4  col-xs-8">
		      				<?php echo form_input(
		                        array(
		                          'name'=>'cargo',
		                          'type'=>'text',
		                          'placeholder'=>'Cargo a ser exercido'
		                        ),
		                        
		                        set_value('cargo'),
		                          'class="form-control"')
		                      ?>
		    			</div>
					  </div>	

					  <div class="form-group">
					  	<div class="col-md-12">
					  		<label for="estado"><?php echo form_label('Estado:', 'Estado') ?></label>
					  	</div>			    
					    <div class="col-md-3 col-xs-8">
		      				<select class="form-control" name='estado'>
							  <option value="Acre">Acre</option>
							  <option value="Alagoas">Alagoas</option>
							  <option value="Amapá">Amapá</option>
							  <option value="Amazonas">Amazonas</option>
							  <option value="Bahia">Bahia</option>
							  <option value="Ceará">Ceará</option>
							  <option value="Distrito Federal">Distrito Federal</option>
							  <option value="Espírito Santo">Espírito Santo</option>
							  <option value="Goiás">Goiás</option>
							  <option value="Maranhão">Maranhão</option>
							  <option value="Mato Grosso">Mato Grosso</option>
							  <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
							  <option value="Minas Gerais">Minas Gerais</option>
							  <option value="Pará">Pará</option>
							  <option value="Paraíba">Paraíba</option>
							  <option value="Paraná">Paraná</option>
							  <option value="Pernambuco">Pernambuco</option>
							  <option value="Piauí">Piauí</option>
							  <option value="Rio de Janeiro">Rio de Janeiro</option>
							  <option value="Rio Grande do Norte">Rio Grande do Norte</option>
							  <option value="Rio Grande do Sul">Rio Grande do Sul</option>
							  <option value="Rondônia">Rondônia</option>
							  <option value="Roraima">Roraima</option>
							  <option value="Santa Catarina">Santa Catarina</option>
							  <option value="São Paulo">São Paulo</option>
							  <option value="Sergipe">Sergipe</option>
							  <option value="Tocantins">Tocantins</option>
							</select>
		    			</div>
					  </div>

					  <div class="form-group">
					  	<div class="col-md-12">
					  		<label for="email"><?php echo form_label('Email:', 'Email') ?></label>
					  	</div>			    
					    <div class="col-md-4 col-xs-12">
		      				<?php echo form_input(
		                        array(
		                          'name'=>'email',
		                          'type'=>'email',
		                          'placeholder'=>'Email para contato'
		                        ),
		                        
		                        set_value('email'),
		                          'class="form-control"')
		                      ?>
		    			</div>
					  </div>

					  <div class="form-group">
					  	<div class="col-md-12">
					  		<label for="asfasfaf"><?php echo form_label('Status:', 'Status') ?></label>
					  	</div>			    
					    <div class="col-md-3 col-xs-10">
		      				<select class="form-control" name="status">
							  <option value="1">Precisando de Profissionais</option>
							  <option value="2">Realizando Entrevistas</option>
							  <option value="3">Realizando Contratações</option>
							  <option value="4">Concluido</option>
							  <option value="5">Outros</option>
							</select>
		    			</div>
					  </div>

					  <div class="form-group">
					  	<div class="col-md-12">
					  		<label for="asfasfaf"><?php echo form_label('Descrição:', 'Descrição') ?></label>
					  	</div>			    
					    <div class="col-md-5">
		      				<?php echo form_textarea(
		                        array(
		                          'name'=>'descricao',
		                          'type'=>'text-area',
		                          'placeholder'=>'Descrição'
		                        ),

		                        set_value('descricao'),
		                          'class="form-control"')
		                      ?>
		    			</div>
					  </div>

					  <div class="form-group">
					  	<div class="col-md-12">
					  		<label for="asfasfaf"><?php echo form_label('Benefícios da empresa:', 'Beneficios') ?></label>
					  	</div>			    
					    <div class="col-md-6">
		      				<label class="checkbox-inline">
							  <input type="checkbox" id="vale_transporte" name="vale_transporte"> Vale Transporte
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="ticket" name="ticket"> Ticket Alimentação
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="plano_saude" name="plano_saude"> Plano de Saude
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="pl" name="pl"> Participação nos lucros
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="outros"name="outros"> Outros
							</label>
		    			</div>
					  </div>		  

					<div class="form-group col-md-8">
                    	<div class=" col-md-4">  
                    		<?php echo form_reset('', 'Cancelar','class="btn btn-danger"') ?>        		
                    	</div>
                    	<div class="float-right">
                    		<?php echo form_submit('', 'Cadastrar Oportunidade','class="btn btn-success"') ?>
                    	</div>
                  	</div>

					<?php echo form_close() ?>

			    	</div>
			    </div>
			  </div>
			</div>	

			</div>
	    </div>
    </section>		
</div>