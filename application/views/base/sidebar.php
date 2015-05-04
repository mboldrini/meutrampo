
  <body class="skin-purple sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo site_url('painel/') ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>M</b>T</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Meu</b>Trampo</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Menu</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">     
         
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="?php echo base_url();?>assets/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Joãozim Silva</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="?php echo base_url();?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>Joãozim Silva - Web Developer
                      <small>Membro Desde. 2015</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sair</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">          
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Procurar Oportunidades..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">

            <li class="header">Menu de Navegação</li>

            <li class="active treeview">
              <a href="<?php echo site_url('painel/') ?>">
                <i class="fa fa-dashboard"></i>
                <span>Painel</span>
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-envelope-o"></i>
                <span>Mensagens</span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo site_url('oportunidades') ?>">
                <i class="fa fa-child"></i>
                <span>Oportunidades</span>
              </a>
            </li>           

            <li class="treeview">
              <a href="#">
                <i class="fa fa-archive"></i>
                <span>Curriculum</span>
              </a>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>    