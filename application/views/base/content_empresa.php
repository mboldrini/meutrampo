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
                $nome_empresa = $info->nome;
              }

              $oportunidades_cadastradas = $this->Oportunidades_model->quantidadeOportunidadesCadastradas($nome_empresa);

              $usuarios_cadastrados = $this->Oportunidades_model->quantidadeUsuariosCadastrados();
              
            ?>

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $usuarios_cadastrados; ?></h3>
                  <p>Pessoas procurando oportunidades</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer"  data-toggle="tooltip" data-placement="right" title="Essa função ainda não foi implementada!">Quem são? <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
  
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $oportunidades_cadastradas; ?></h3>                 
                  <p>Oportunidades Cadastradas</p>
                </div>
                <div class="icon">
                  <i class="fa fa-child"></i>
                </div>
                <a href="<?php echo base_url();?>empresa/oportunidades" class="small-box-footer">Ver Oportunidades <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

          </div><!-- /.row -->


	<div class="col-md-12">

		asafasf
   
		
	</div>

</section><!-- /.content -->