
<p class="bg-danger">

	<?php echo validation_errors("<p class='bg-danger'>"); ?>

</p>
<?php
	
	$attributes = array(
						'class' => 'form-horizontal'
					);

 ?>

<?php echo form_open('Sertifikat_2016/create_sertifikat_ntb',$attributes); ?>

<div class="form-group ">
<?php echo form_label('Tanggal Upload'); ?>
	<?php 

		$data = array(

				'class' => 'form-control',
				'name' => 'tgl_upload',
				'value' => date('Y-m-d'),
				'readonly' => 'readonly'

		);

	?>

	<?php echo form_input($data); ?>

</div>

<div class="form-group ">
<?php echo form_label('NIP Pegawai'); ?>
	<?php 

		$data = array(

				'class' => 'form-control',
				'name' => 'nip',
				'placeholder' => 'Masukan NIP Pegawai' 

		);

	?>

	<?php echo form_input($data); ?>

</div>



<div class="form-group">

	<?php 

		$data = array(

			'class' => 'btn btn-md u-btn-blue g-mr-10 g-mb-15',
			'name' => 'submit',
			'value' => 'Simpan'

		);

		echo form_submit($data);

	 ?>

</div>



<?php echo form_close(); ?>