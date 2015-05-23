<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
	  <h1>
	    <?php echo $ondeesta ?>
	    <small><?php echo $descricao ?></small>
	  </h1>
	</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">

			<div class="col-md 12">
				<a href="<?php echo base_url('upload/enviarCurriculum'); ?>" class="btn btn-primary">Cadastrar Curriculum</a>
			</div>

			<br>

			<?php 
				foreach ($infos as $key) {
					'<br> asfasfasf asfasf -' . $key->id;
				}
				$idUsuario = $key->id;

				$meuCurriculum = $this->Oportunidades_model->curriculumCadastrados($idUsuario)->result();
			?>

			<table class="table table-striped">

				<p>Obs: para evitar problemas, mantenha apenas UM curriculum cadastrado!</p>

				<thead>
	                <tr>
	                	<th>ID</th>
						<th>Link</th>
						<th>Opções</th>
	                </tr>
              	</thead>
				
				<?php foreach ($meuCurriculum as $key): ?>
					<tr>
						<td><?php echo $key->id; ?></td>
						<td><a href="<?php echo base_url( 'uploads/' . $key->nomearquivo ); ?>" target="_blank">Meu Curriculum</a></td>
						<td>
							<a href="<?= base_url('upload/exibeCurriculum/' . $key->id) ?>" class="btn btn-danger fa fa-trash-o">Excluir</a>
						</td>
					</tr>
				<?php endforeach ?>

			</table>

    	</div><!-- ./col-md-12 -->
	</div>
</section>		
</div>