<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo base_url();?>assets/css/outros.css" rel="stylesheet" type="text/css" />

    <script src="<?php echo base_url();?>assets/js/jQuery-2.1.3.min.js" type="text/javascript"></script>    
    <script src="<?php echo base_url();?>assets/js/login.js" type="text/javascript"></script>  


	</head>
	<body>
	<?php
	$username = array('name' => 'username', 'placeholder' => 'nombre de usuario');
	$password = array('name' => 'password',	'placeholder' => 'introduce tu password');
	$submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión');
	?>

	<div class="container">
    	<div class="row painel-delogin">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Registrar</a>
							</div>
						</div>
						<hr>
					</div>

					<div class="panel-body">
						<div class="row">

							<?php
							$username = array('name' => 'username', 'placeholder' => 'nombre de usuario');
							$password = array('name' => 'password',	'placeholder' => 'introduce tu password');
							$submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión');
							?>


							<div class="col-lg-12">

								<?=form_open(base_url().'login/new_user',array('role'=>'form','style'=>'display:block'))?>
																	
									<div class="form-group">										
										<!--<?=form_input($username)?>	-->
										<?php echo form_input(
					                        array(
					                          'name'=>'username',
					                          'type'=>'text',
					                          'placeholder'=>'Seu Login'
					                        ),
				                        
				                        	set_value('username'),
				                          		'class="form-control"')
				                      	?>									
										<p><?=form_error('username')?></p>										
									</div>

									<div class="form-group">
										<!--<?=form_password($password)?>-->
										<?php echo form_input(
					                        array(
					                          'name'=>'password',
					                          'type'=>'password',
					                          'placeholder'=>'Sua Senha'
					                        ),
				                        
				                        	set_value('password'),
				                          		'class="form-control"')
				                      	?>	
										<p><?=form_error('password')?></p>										
									</div>

									<?=form_hidden('token',$token)?>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<?php echo form_submit('submit', 'Entrar','class="form-control btn btn-login"') ?>												
											</div>
										</div>
									</div>

								<?=form_close()?>

								<?php 
									if($this->session->flashdata('usuario_incorrecto')){
								?>
								<p><?=$this->session->flashdata('usuario_incorrecto')?></p>
								<?php
									}
								?>



								<form id="register-form" action="#" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	</body>
</html>