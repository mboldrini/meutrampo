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

<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

    	</div><!-- ./col-md-12 -->
	</div>
</section>		
</div>