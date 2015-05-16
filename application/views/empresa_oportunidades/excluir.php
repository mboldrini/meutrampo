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

      <?php 

          /* essa é uma variavel de idendificação do usuário a ser editado
          * essa variavel recebe o valor por meio da url, 
          * já o segment eu não faço a minima ideia mas ta funcionando */
          $iduser = $this->uri->segment(3);

          /* se o cara tentar acessar aluno/editar sem enviar informação, ele é redirecionado para a tela
          * de alunos cadastrados no sistema */
          if($iduser == NULL){
           redirect('empresa/oportunidades');
          }

          /* a variavel query é executada aqui,
          * chama o model Aluno_model,
          * chama a função get_byid( ) - passa a variavel de identificação do usuário a ser editado
          * o row pega a linha que está retornando do Aluno_model */ 
          $query = $this->Oportunidades_model->get_byid($iduser)->row();

        ?>


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
          foreach ($infos as $info) {
            $nome = $info->nome;
          }
        ?>

        <?php echo form_open('empresa/excluirOportunidade',array('class'=>'form-horizontal'))?>

          <?php echo form_hidden('id',$query->id);  ?>

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
                
                set_value('empresa_responsavel',$query->empresa_responsavel),
                  'class="form-control"')
              ?>
            </div>
          </div>  

          <fieldset disabled>
            <div class="form-group">
              <div class="col-md-12">
                <label for="area_atuacao"><?php echo form_label('Área de atuação:', 'Área de atuação') ?></label>
              </div>          
              <div class="col-md-3 col-xs-8">
                <select class="form-control" name="area">
                  <?php foreach ($areas as $area) {                   
                    if($query->area == $area->area){ ?>
                      <option value="<?php echo $area->area ?>" selected><?php echo $area->area ?></option>
                   <?php 
                    }else{  ?>
                      <option value="<?php echo $area->area ?>"><?php echo $area->area ?></option>
                   <?php 
                    }
                  } ?>
              </select>
              </div>
            </div>  
          </fieldset>

          <div class="form-group">
            <div class="col-md-12">
              <label for="cargo"><?php echo form_label('Cargo:', 'Cargo') ?></label>
            </div>          
            <div class="col-md-4  col-xs-8">
              <?php echo form_input(
                array(
                  'name'=>'cargo',
                  'type'=>'text',
                  'placeholder'=>'Cargo a ser exercido',                  
                  'readonly'=>'readonly'
                ),
                
                set_value('cargo',$query->cargo),
                  'class="form-control"')
              ?>
            </div>
          </div> 

          <fieldset disabled>
            <div class="form-group">
              <div class="col-md-12">
                <label for="estado"><?php echo form_label('Estado:', 'Estado') ?></label>
              </div>          
              <div class="col-md-3 col-xs-8">
                <select class="form-control" name='estado'>
                  <?php
                    foreach ($estados as $key) {                   
                      if($key->sigla == $query->estado ){  ?>
                        <option value="<?php echo $key->sigla ?>" selected><?php echo $key->estado; ?></option>
                       
                     <?php }else{  ?>
                        <option value="<?php echo $key->sigla ?>"><?php echo $key->estado; ?></option>                
                 <?php     }
                    } 
                  ?>
                </select>
              </div>
            </div>
          </fieldset>

          <div class="form-group">
            <div class="col-md-12">
              <label for="email"><?php echo form_label('Email:', 'Email') ?></label>
            </div>          
            <div class="col-md-4 col-xs-12">
              <?php echo form_input(
                array(
                  'name'=>'email',
                  'type'=>'email',
                  'placeholder'=>'Email para contato',
                  'readonly'=>'readonly'
                ),
                
                set_value('email',$query->email),
                  'class="form-control"')
              ?>
            </div>
          </div>

          <fieldset disabled>
            <div class="form-group">
              <div class="col-md-12">
                <label for="asfasfaf"><?php echo form_label('Status:', 'Status') ?></label>
              </div>          
              <div class="col-md-3 col-xs-10">
                <select class="form-control" name="status">
                 <?php
                    foreach ($status as $status) {                   
                      if($status->id == $query->status ){  ?>
                        <option value="<?php echo $status->id ?>" selected ><?php echo $status->status; ?></option>
                       
                     <?php }else{  ?>
                        <option value="<?php echo $status->id ?>"><?php echo $status->status ?></option>                
                 <?php     }
                    } 
                  ?>
              </select>
              </div>
            </div>
          </fieldset>
          

          <div class="form-group">
            <div class="col-md-12">
              <label for="asfasfaf"><?php echo form_label('Descrição:', 'Descrição') ?></label>
            </div>          
            <div class="col-md-5">
              <?php echo form_textarea(
                array(
                  'name'=>'descricao',
                  'type'=>'text-area',                  
                  'readonly'=>'readonly',
                  'placeholder'=>'Descrição'
                ),

                set_value('descricao',$query->descricao),
                  'class="form-control "')
              ?>
            </div>
          </div>

          <?php 

            if($query->vale_transporte == 'on'){
              $vt = 'checked';
            }else{
              $vt = false;
            }

            if($query->ticket == 'on'){
              $ticket = 'checked';
            }else{
              $ticket = false;
            }

            if($query->plano_saude == 'on'){
              $plano_saude = 'checked';
            }else{
              $plano_saude = false;
            }

            if($query->pl == 'on'){
              $pl = 'checked';
            }else{
              $pl = false;
            }

            if($query->outros == 'on'){
              $outros = 'checked';
            }else{
              $outros = false;
            }

           ?>

          <fieldset disabled>
            <div class="form-group">
              <div class="col-md-12">
                <label for="asfasfaf"><?php echo form_label('Benefícios da empresa:', 'Beneficios') ?></label>
              </div>          
              <div class="col-md-6">
                <label class="checkbox-inline">
                  <input type="checkbox" id="vale_transporte" name="vale_transporte" <?php echo $vt; ?> > Vale Transporte
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="ticket" name="ticket" <?php echo $ticket; ?> > Ticket Alimentação
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="plano_saude" name="plano_saude" <?php echo $plano_saude; ?> > Plano de Saude
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="pl" name="pl" <?php echo $pl; ?> > Participação nos lucros
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="outros" name="outros" <?php echo $outros; ?> > Outros
                </label>
              </div>
            </div>  
          </fieldset>    

          <div class="form-group col-md-8">
            <div class=" col-md-4">  
              <a class="btn btn-default" href="<?php echo base_url('empresa/oportunidades'); ?>" role="button">Cancelar</a>         
            </div>
            <div class="float-right">
              <?php echo form_submit('', 'Excluir essa Oportunidade','class="btn btn-danger"') ?>
            </div>
          </div> 

        <?php echo form_close() ?>


			

    </div><!-- ./col-md-12 -->
</div>
   

</section>		
</div>