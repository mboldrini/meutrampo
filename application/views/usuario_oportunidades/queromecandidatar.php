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
	<div class="col-md-12">

    <?php 

      /* o código da oportunidade vem da view PerfilOportunidade */
      $idOportunidade = $this->uri->segment(3);

      /* a função get_byid pega a oportunidade pelo ID que veio na url */
      $query = $this->Oportunidades_model->get_byid($idOportunidade)->row();


      echo $idvaga = $query->id;
      echo $idusuario = $this->session->userdata('id_usuario');
      echo $nomeempresa =  $query->empresa_responsavel;

      $dadosCandidato = array('idvaga'=> $idvaga, 'nomeempresa'=>$nomeempresa, 'idusuario'=>$idusuario);

      $this->Oportunidades_model->queromecandidatar($dadosCandidato);
 

      ?>

		
	</div>
</section><!-- /.content -->