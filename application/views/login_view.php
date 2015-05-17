<!DOCTYPE html>
  <html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Bootstrap 3.3.4 -->
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

            <?php
              $username = array('name' => 'username', 'placeholder' => 'seu login');
              $password = array('name' => 'password', 'placeholder' => 'sua senha');
              $submit = array('name' => 'submit', 'value' => 'Iniciar Sessão', 'title' => 'Iniciar Sessão');
            ?>

            <h3 class="panel-title">Login</h3>
        </div>

          <div class="panel-body">

            <?=form_open(base_url().'login/new_user',array('role'=>'form','style'=>'display:block'))?>

              <fieldset>

                <div class="form-group">
                  <?php echo form_input(
                    array(
                      'name'=>'username',
                      'type'=>'text',
                      'placeholder'=>'Seu Login'
                    ),
                  
                    set_value('username'),
                        'class="form-control"')
                  ?>        
                </div>

                <div class="form-group">
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
                <?=form_hidden('token',$token)?>

                <?php echo form_submit('submit', 'Entrar','class="form-control btn btn-login btn-block"') ?>  

                <?=form_close()?>

                <?php 
                  if($this->session->flashdata('usuario_incorrecto')){
                ?>
                <p><?=$this->session->flashdata('usuario_incorrecto')?></p>
                <?php
                  }
                ?>
                  
               

              </fieldset>

              <a href="<?php echo base_url('registrar') ?>">REGISTRAR</a>

            </form>

          </div>
      </div>
    </div>
  </div>
</div>

  </body>
</html>