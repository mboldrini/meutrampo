<!DOCTYPE html>
  <html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Bootstrap 3.3.4 -->
  <title><?php echo $titulo ?></title>
  
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo base_url();?>assets/css/outros.css" rel="stylesheet" type="text/css" />

    <script src="<?php echo base_url();?>assets/js/jQuery-2.1.3.min.js" type="text/javascript"></script>    
    <script src="<?php echo base_url();?>assets/js/login.js" type="text/javascript"></script>  


  </head>
  <body class="site">

    <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->

<div class="container">
    <div class="row vertical-offset-100">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
        	<div class="panel-heading">
            	<h3 class="panel-title">Registrar Usuário</h3>
        	</div>
          <div class="panel-body">

            <?=form_open(base_url().'registrar',array('role'=>'form','style'=>'display:block'))?>

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

              <fieldset>

                <div class="form-group fg-registro-topo">				
				  	<label for="area_atuacao"><?php echo form_label('Tipo de Login:', 'Perfil') ?></label>
				    <div class="col-md-12">
	      				<select class="form-control" name="perfil">
	                    	<option value="usuario">Pessoa Fisica</option>	        
	                    	<option value="empresa">Empresa</option>	
						</select>
	    			</div>
				</div>

				<div class="form-group fg-registro">
				  	<label for="login"><?php echo form_label('Login:', 'Login') ?></label>				  			    
				    <div class="col-md-12">
	      				<?php echo form_input(
	                        array(
	                          'name'=>'username',
	                          'type'=>'text',
	                          'placeholder'=>'Seu Login de Acesso'
	                        ),
	                        
	                        set_value('username'),
	                          'class="form-control"')
	                      ?>
	    			</div>
				</div>

				<div class="form-group fg-registro">
				  	<label for="login"><?php echo form_label('Nome:', 'Nome') ?></label>				  			    
				    <div class="col-md-12">
	      				<?php echo form_input(
	                        array(
	                          'name'=>'nome',
	                          'type'=>'text',
	                          'placeholder'=>'Seu Nome de Acesso'
	                        ),
	                        
	                        set_value('nome'),
	                          'class="form-control"')
	                      ?>
	    			</div>
				</div>

				<div class="form-group fg-registro">
				  	<label for="login"><?php echo form_label('Email:', 'Email') ?></label>				  			    
				    <div class="col-md-12">
	      				<?php echo form_input(
	                        array(
	                          'name'=>'email',
	                          'type'=>'email',
	                          'placeholder'=>'Seu Email'
	                        ),
	                        
	                        set_value('email'),
	                          'class="form-control"')
	                      ?>
	    			</div>
				</div>

				<div class="form-group fg-registro fg-fundo">
				  	<label for="login"><?php echo form_label('Senha:', 'Senha') ?></label>				  			    
				    <div class="col-md-12">
	      				<?php echo form_input(
	                        array(
	                          'name'=>'password',
	                          'type'=>'password',
	                          'placeholder'=>'Sua Senha'
	                        ),
	                        
	                        set_value('password'),
	                          'class="form-control"')
	                      ?>
	    			</div>
				</div>
                

               <?php echo form_submit('submit', 'Registrar','class="btn btn-primary btn-registro form-control"') ?>                  

              </fieldset>

              

            </form><a href="<?php echo base_url('login') ?>">Login</a>

          </div>
      </div>
    </div>
  </div>
</div>

  </body>
</html>