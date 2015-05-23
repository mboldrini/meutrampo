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

			<?php 

				foreach ($infos as $key) {
					'<br> asfasfasf asfasf -' . $key->id;
				}

			?>

		<!--	<ul>
				<?php foreach ($upload_data as $item => $value):?>
					<li>
						<?php $item;?>: <?php $value;?>
					</li>					
				<?php endforeach; ?>
			</ul>-->

		<!--	<h4>Nome Final:</h4>
			<h6><?php $upload_data['file_name']; ?></h6>
			<h6><a href="<?php base_url() . 'uploads/' . $upload_data['file_name']; ?>">LINK TESTE</a></h6>-->


			<?php 

				$idUsuario = $key->id;

				$nomeArquivo = $upload_data['file_name'];

				$dados = array('idusuario'=>$idUsuario,'nomearquivo'=>$nomeArquivo);

				$this->Oportunidades_model->cadastraCurriculum($dados);

			?>

			<h2>Parabéns! Seu curriculum Foi cadastrado com Sucesso!</h2>

    	</div><!-- ./col-md-12 -->
	</div>
</section>		
</div>
