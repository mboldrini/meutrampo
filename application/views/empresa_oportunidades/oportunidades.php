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

    <section class="col-md-12">
      <a href="<?php echo base_url();?>empresa/novaOportunidade" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Cadastrar nova oportunidade de emprego">Cadastrar Oportunidade</a>
    </section>

	<div class="col-md-12">

    <?php 
        foreach ($infos as $info) {
          $nome_empresa = $info->nome;
        }

        $oportunidades = $this->Oportunidades_model->oportunidadesCadastradas($nome_empresa)->result(); 

    ?>

    <div class="panel panel-primary filterable">
      <div class="panel-heading">
        <h3 class="panel-title">Oportunidades</h3>
          <div class="pull-right">
            <button class="btn btn-default btn-xs btn-filter" data-toggle="tooltip" data-placement="top" title="Pesquisar por oportunidades especificas"><span class="fa fa-filter"></span> Filtrar</button>
          </div>
      </div>
      <table class="table">
        <thead>
          <tr class="filters">
            <th><input type="text" class="form-control" placeholder="Código" disabled></th>
            <th><input type="text" class="form-control" placeholder="Cargo" disabled></th>
            <th><input type="text" class="form-control" placeholder="Empresa" disabled></th>
            <th><input type="text" class="form-control" placeholder="Estado" disabled></th>
          </tr>
        </thead>
        
        <tbody>
    
        <?php foreach ($oportunidades as $op) { ?>
          <tr>
            <td>
              <a href="<?= base_url('empresa/perfilOportunidade/' . $op->id) ?>">
                <?php echo $op->id ?>
              </a>              
            </td>
            <td>
              <a href="<?= base_url('empresa/perfilOportunidade/' . $op->id) ?>"><?php echo $op->cargo ?></a>
            </td>
            <td><?php echo $op->empresa_responsavel ?></td>
            <td><?php echo $op->estado ?></td>
          </tr>
        <?php } ?>

     
        </tbody>
      </table>
    </div>


  





		
	</div>
</section><!-- /.content -->