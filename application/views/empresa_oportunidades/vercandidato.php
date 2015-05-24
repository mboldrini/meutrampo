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

        $iduser = $this->uri->segment(3);

        if($iduser == NULL){
         redirect('empresa/candidatos');
        }

        //$query = $this->Oportunidades_model->get_byid($iduser)->row();         

        $iduser;

        $curriculum = $this->Oportunidades_model->curriculumDoCandidato($iduser)->row();

      

        $curriculum->nomearquivo;

      ?>

    


    </div><!-- ./col-md-12 -->
  </div>

  <a href="<?php echo base_url('empresa/candidatos'); ?>" class='btn btn-primary'>Voltar</a>
  <br>
  <br>

  <div class="row">
    <div class="col-md-12">
      <iframe src="<?= base_url('uploads/' . $curriculum->nomearquivo) ?>" width='90%' height="600px"></iframe>
    </div>  
  </div>

</section>    
</div>