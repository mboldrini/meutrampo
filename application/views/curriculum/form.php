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

			

			


			<?php echo $error;?>
				<?php echo form_open_multipart('upload/cadastraCurriculum');?>
				<input type="file" name="userfile" />
				<br />
				<?php echo form_submit('', 'Enviar Curriculum','class="btn btn-primary"') ?>
			</form>


    	</div><!-- ./col-md-12 -->
	</div>
</section>		
</div>