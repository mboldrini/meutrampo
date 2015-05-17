 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo $ondeesta ?>
            <small><?php echo $descricao ?></small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">

            <?php 
              foreach ($infos as $info) {
                $nome_usuario = $info->nome;
              }


              $oportunidades_disponiveis = $this->Oportunidades_model->oportunidadesDisponiveis();   

              $empresas_cadastradas = $this->Oportunidades_model->quantidadeEmpresasCadastradas();

            ?>

          <div class="col-lg-3">
             <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-university  "></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Empresas <p>Cadastradas</p></span>
                <span class="info-box-number"><?php echo $empresas_cadastradas ?></span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
          </div>

          <div class="col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="fa fa-bullhorn  "></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Oportunidades <p>Disponíveis</p></span>
                <span class="info-box-number"><?php echo $oportunidades_disponiveis; ?></span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
          </div>
  
          </div><!-- /.row -->


	<div class="col-md-12">

		<!--asafasf -->
   
		
	</div>

</section><!-- /.content -->