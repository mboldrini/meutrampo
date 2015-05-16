
  <body class="skin-purple sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo site_url('empresa/') ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>M</b>T</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Meu</b>Trampo</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
    

        <nav class="navbar navbar-static-top" role="navigation">
           <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">


        <!-- Notifications: style can be found in dropdown.less -->
        <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-question"></i>
          </a>
          <ul class="dropdown-menu">
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li>
                  <a href="#" data-toggle="modal" data-target="#autor">
                    <i class="fa fa-user-secret"></i>Autor
                  </a>
                </li>
                <li>
                  <a href="#" data-toggle="modal" data-target="#autor">
                    <i class="fa fa-qrcode"></i>Sobre
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>

        <?php 
          foreach ($infos as $info) {
            $email = $info->email;
            $nome = $info->nome;
          }
        ?>

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php base_url(); ?>assets/img/bolsonaro.jpg" class="user-image" alt="User Image"/>
            <span class="hidden-xs"><?php echo $nome; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php base_url(); ?>assets/img/bolsonaro.jpg" class="img-circle" alt="User Image" />
              <p>
                <?php echo $nome; ?>
                <small><?php echo $email; ?></small>
              </p>
            </li>
            <!-- Menu Body -->

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-right">
                <a href="<?php echo base_url();?>login/logout_ci" class="btn btn-default btn-flat">Sair</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
        </nav>
      </header>



      <aside class="main-sidebar">
        <section class="sidebar">          
          <ul class="sidebar-menu">

            <li class="header">Menu de Navegação</li>

            <li class="active treeview">
              <a href="<?php echo site_url('empresa/') ?>">
                <i class="fa fa-dashboard"></i>
                <span>Painel</span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo site_url('empresa/oportunidades') ?>">
                <i class="fa fa-child"></i>
                <span>Oportunidades</span>
              </a>
            </li> 

            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Candidatos</span>
              </a>
            </li>


          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>    






<!-- Modal -->
<div class="modal fade" id="autor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Autor</h4>
      </div>
      <div class="modal-body">
        Olá terraqueo!
        <p>Esse ""Sistema"" foi desenvolvido por M _ T H _ _ S (<b>Complete o nome</b>) com o objetivo de Ser <strike>aprovado e concluir o curso</strike>
          apenas um trabalho acadêmico de final de semestre, obviamente que esse projeto não está 100% funcional, foi feito apenas Algumas <strike>gambiarras</strike>
          funções como forma de completar os requisitos pedidos no projeto
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Ok, Entendi!</button>
      </div>
    </div>
  </div>
</div>