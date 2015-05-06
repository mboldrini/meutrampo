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
				
				<?php echo form_open('oportunidades_empresa/nova',array('class'=>'form-horizontal'))?>

					  <div class="form-group">
					  	<div class="col-md-12">
					  		<label for="area_atuacao"><?php echo form_label('Área de atuação:', 'Área de atuação') ?></label>
					  	</div>			    
					    <div class="col-md-3 col-xs-8">
		      				<select class="form-control">
								<?php foreach ($areas as $area) { ?>
                            		<option value="<?php echo $area->id ?>"><?php echo $area->area ?></option>
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
		      				<select class="form-control">
							  <option value="AC">Acre</option>
							  <option value="AL">Alagoas</option>
							  <option value="AM">Amapá</option>
							  <option value="AM">Amazonas</option>
							  <option value="BA">Bahia</option>
							  <option value="CE">Ceará</option>
							  <option value="DF">Distrito Federal</option>
							  <option value="ES">Espírito Santo</option>
							  <option value="GO">Goiás</option>
							  <option value="MA">Maranhão</option>
							  <option value="MT">Mato Grosso</option>
							  <option value="MS">Mato Grosso do Sul</option>
							  <option value="MG">Minas Gerais</option>
							  <option value="PA">Pará</option>
							  <option value="PB">Paraíba</option>
							  <option value="PR">Paraná</option>
							  <option value="PE">Pernambuco</option>
							  <option value="PI">Piauí</option>
							  <option value="RJ">Rio de Janeiro</option>
							  <option value="RN">Rio Grande do Norte</option>
							  <option value="RS">Rio Grande do Sul</option>
							  <option value="RO">Rondônia</option>
							  <option value="RR">Roraima</option>
							  <option value="SC">Santa Catarina</option>
							  <option value="SP">São Paulo</option>
							  <option value="SE">Sergipe</option>
							  <option value="TO">Tocantins</option>
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
		      				<select class="form-control">
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
							  <input type="checkbox" id="vale_transporte" value="vale_transporte"> Vale Transporte
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="ticket" value="ticket"> Ticket Alimentação
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="plano_saude" value="plano_saude"> Plano de Saude
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="pl" value="pl"> Participação nos lucros
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="outros" value="outros"> Outros
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