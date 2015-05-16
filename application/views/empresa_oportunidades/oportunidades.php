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

    <?php 
      if($this->session->flashdata('edicaook')){
        echo '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">
            &times;
          </span>
        </button>'.$this->session->flashdata('edicaook').'</div>';
      }
   ?>

   <?php 
      if($this->session->flashdata('exclusaook')){
        echo '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">
            &times;
          </span>
        </button>'.$this->session->flashdata('exclusaook').'</div>';
      }
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
            <th><input type="text" class="form-control" placeholder="Cargo" disabled></th>
            <th><input type="text" class="form-control" placeholder="Empresa" disabled></th>
            <th><input type="text" class="form-control" placeholder="Estado" disabled></th>
            <th><input type="text" class="form-control" placeholder="Status" disabled></th>
          </tr>
        </thead>
        
        <tbody>

        <?php foreach ($oportunidades as $op) { ?>
          <tr>
            <td>
              <a href="<?= base_url('empresa/perfilOportunidade/' . $op->id) ?>"><?php echo $op->cargo ?></a>            
            </td>
            <td><?php echo $op->empresa_responsavel ?></td>
            <td>
              <?php 
                foreach ($estados as $est) {
                  if($op->estado == $est->sigla){
                    echo $est->estado;
                  }
                }
              ?>
            </td>
            <td>
              <?php 
                if($op->status == 1){
                  echo '<span class="label label-primary">Precisando de Profissionais</span>';
                }else if($op->status == 2){
                  echo '<span class="label label-info">Realizando Entrevistas</span>';
                }else if($op->status == 3){
                  echo '<span class="label label-warning">Realizando Contratações</span>';
                }else if($op->status == 4){
                  echo '<span class="label label-danger">Essa Oportunidade não está mais disponível!</span>';
                }else{
                  echo '<span class="label label-default">Outros!</span>';
                }
              ?>   
            </td>
            <td>
              <a href="<?= base_url('empresa/editarOportunidade/' . $op->id) ?>">
                <button type="button" class="btn btn-primary fa fa-pencil-square-o">Editar</button>
              </a>
              <a href="<?= base_url('empresa/excluirOportunidade/' . $op->id) ?>">
                <button type="button" class="btn btn-danger fa fa-trash-o">Excluir</button>
              </a>
            </td>
          </tr>
        <?php } ?>

     
        </tbody>
      </table>
    </div>


  





		
	</div>
</section><!-- /.content -->