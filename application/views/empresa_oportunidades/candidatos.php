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


    <?php 

    	foreach ($infos as $info) {
    		//echo $info->nome;
    		$nomedaempresa = $info->nome;
    	}

    	$candidatosCadastrados = $this->Oportunidades_model->exibeOportunidades($nomedaempresa)->result();


    	//foreach ($candidatosCadastrados as $key) {
    	//	echo '<br>' . $key->idusuario;
    	//}



    	/**  testes relacionados ao nome do candidato */ 
    	//$nomedoCandidatoO = $this->Oportunidades_model->nomeDoCandidato($key->idusuario)->row();

    	//echo print_r($nomedoCandidatoO);
    	//echo $nomedoCandidatoO->nome;
  	

    ?>
		
	<div class="row">
        <div class="col-md-12">
        	<div class="panel panel-primary filterable">
	            <div class="panel-heading">
	                <h3 class="panel-title">Candidatos</h3>
	                <div class="pull-right">
	                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
	                </div>
	            </div>
	            <table class="table">
	                <thead>
	                    <tr class="filters">
	                        <th><input type="text" class="form-control" placeholder="Código da Vaga" disabled></th>
	                        <th><input type="text" class="form-control" placeholder="Nome do Candidato" disabled></th>
	                        <th><input type="text" class="form-control" placeholder="Empresa" disabled></th>
	                    </tr>
	                </thead>
	                <tbody>
	                	<?php foreach ($candidatosCadastrados as $key) { ?>					    	
					    	<tr>

			                    <td><?php echo $key->idvaga;  ?></td>  

			                    <?php $nomeDoCandidato = $this->Oportunidades_model->nomeDoCandidato($key->idusuario)->row(); ?>

								<td>
									<a href="<?php echo $nomeDoCandidato->id; ?>">
										<?php echo $nomeDoCandidato->nome; ?>
									</a>
								</td>

			                    <td>
			                    	<?php echo $key->nomeempresa; ?>
			                    </td>

			                    <td>
			                    	<?php echo $nomeDoCandidato->id; ?>
			                    </td>

			                </tr>
					  	<?php } ?>
	                 	
	                </tbody>
	            </table>
        	</div>
        </div>
    </div>

</section>		
</div>