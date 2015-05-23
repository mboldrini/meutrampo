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

				$idCurriculum = $this->uri->segment(3);

				$meuCurriculum = $this->Oportunidades_model->exibeOcurriculum($idCurriculum)->result();
				
			?>

			<h4>Esse é o Curriculum que você pretende excluir:</h4>

	
			<?php 

				foreach ($meuCurriculum as $key) {
					echo $key->id;
				}

				$excluir = $key->id;

				$oQueFazer = array('id'=>$excluir);

			?>

			<?php 

				echo $this->Oportunidades_model->excluirCurriculum($oQueFazer);

			?>

    


    	</div><!-- ./col-md-12 -->
	</div>
</section>		
</div>