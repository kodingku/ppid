	<h1 class="text-center">Nip</h1>
	<h2 class="text-center"><?php echo $view_ntb->nip; ?></h2>

<div class="row">
	<?php if ($view_ntb->fl_photo) { ?>	
		<img src="<?php echo base_url();?>assets/img/data_2016/ntb/<?php echo $view_ntb->fl_photo ?>" style="margin: 0 auto;">
	<?php  } else { ?>
		<img src="<?php echo base_url();?>assets/img/noimage.png" >
	<?php  } ?>
</div>


