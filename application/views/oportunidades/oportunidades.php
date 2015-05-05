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
      <a href="<?php echo base_url();?>oportunidades/nova" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Cadastrar nova oportunidade de emprego">Cadastrar Oportunidade</a>
    </section>

	<div class="col-md-12">

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
            <th><input type="text" class="form-control" placeholder="Cidade" disabled></th>
          </tr>
        </thead>
        
        <tbody>

          <tr>
            <td>
              <a href="#">001</a>
            </td>
            <td>
              <a href="#">Programador</a>
            </td>
            <td>Contoso</td>
            <td>Acre</td>
          </tr>

          <tr>
            <td>
              <a href="#">002</a>
            </td>
            <td>
              <a href="#">Designer</a>
            </td>
            <td>Contoso</td>
            <td>Roraima</td>
          </tr>

          <tr>
            <td>
              <a href="#">003</a>
            </td>
            <td>
              <a href="#">Web-Developer</a>
            </td>
            <td>Contoso</td>
            <td>Rio de Janeiro</td>
          </tr>

        </tbody>
      </table>
    </div>


  





		
	</div>
</section><!-- /.content -->