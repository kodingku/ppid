
<p class="bg-danger">

	<?php echo validation_errors("<p class='bg-danger'>"); ?>

</p>
<?php
	
	$attributes = array(
						'class' => 'form-horizontal'
					);

 ?>

<?php echo form_open_multipart('Sertifikat_2016/update_ntb/'.$ntb_data->id_sert,'',$attributes); ?>


<div class="form-group ">
<?php echo form_label('NIP Pegawai'); ?>
	<?php 

		$data = array(

				'class' => 'form-control',
				'name' => 'nip',
				'value' => $ntb_data->nip

		);

	?>

	<?php echo form_input($data); ?>

</div>


<div class="form-group">

<?php echo form_label('Upload Sertifikat'); ?>
	
	<input type="file" name="fl_photo">
</div>

<div class="form-group">

	<?php 

		$data = array(

			'class' => 'btn btn-md u-btn-3d u-btn-orange g-mr-10 g-mb-15',
			'name' => 'submit',
			'value' => 'Update'

		);

		echo form_submit($data);

	 ?>
<?php echo form_hidden('id_sert',$ntb_data->id_sert); ?>
</div>



<?php echo form_close(); ?>
<div class="row g-mb-20">
	<label class="control-label"><span class="u-label g-bg-indigo u-label--lg g-px-15 g-py-8 g-mr-10 g-mb-15">Image Preview</span></label>
</div>
<div class="row">
	<?php if ($ntb_data->fl_photo) { ?>	
		<img src="<?php echo base_url();?>assets/img/data_2016/ntb/<?php echo $ntb_data->fl_photo ?>">
	<?php  } else { ?>
		<img src="<?php echo base_url();?>assets/img/noimage.png">
	<?php  } ?>
</div>