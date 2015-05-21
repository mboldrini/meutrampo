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

			<ul>
				<?php foreach ($upload_data as $item => $value):?>
					<li>
						<?php echo $item;?>: <?php echo $value;?>
					</li>
					
				<?php endforeach; ?>
			</ul>

			<h4>Nome Final:</h4>
			<h6><?php echo $upload_data['file_name']; ?></h6>
			<h6><a href="<?php echo base_url() . 'uploads/' . $upload_data['file_name']; ?>">LINK TESTE</a></h6>

    	</div><!-- ./col-md-12 -->
	</div>
</section>		
</div>
