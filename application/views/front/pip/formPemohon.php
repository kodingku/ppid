
<div class="container">
	
<?php echo validation_errors(); ?>

	<?php if ($this->session->flashdata('create_data')){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <strong><?php echo $this->session->flashdata('create_data'); ?></strong> 
    </div>
  
  <?php } ?>

  
	<h1 class="text-center">Form Permohonan Layanan Informasi Publik</h1>
	<h1 class="text-center">PPPPTK PENJAS dan BK</h1>

	<?php $attributes = array('class'=>'form-horizontal'); ?>


	<?php echo form_open_multipart('Home/store',$attributes); ?>


	
			
		<div class="form-group">

			<?php echo form_label('Jenis Pengaduan'); ?>
			<br>
			<?php 

				$data = array(

					'name' => 'jenis_pengaduan',
					'value' => 1,
					'checked' => TRUE



				);

				
			?>
			<?php echo form_radio($data); ?>Perorangan

			<?php 

				$data = array(

					'name' => 'jenis_pengaduan',
					'value' => 2



				);
				

			?>

			<?php echo form_radio($data); ?>Perusahaan

		</div>

		<div class="form-group">
			<?php echo form_label('Upload Foto identitas (untuk perorangan) / Foto Pendukung (untuk Perusahaan)'); ?>
		
				<input type="file" name="fl_photo" class="form-control col-md-6" required="required">
				<span>*Maksimum 1Mb File Upload</span>
			</div>
		

		<div class="form-group">
			
				<?php echo form_label('Nama Lengkap'); ?>

					<?php 

						$data = array(
							'class' => 'form-control',
							'name' => 'nama',
							'required' => 'required'

						);


					?>
				<?php echo  form_input($data); ?>
			
		</div>

		<div class="form-group">
			
				<?php echo form_label('Alamat Email'); ?>

					<?php 

						$data = array(
							'class' => 'form-control',
							'name' => 'email',
							'required' => 'required'

						);


					?>
				<?php echo  form_input($data); ?>
			
		</div>

		<div class="form-group">
			
				<?php echo form_label('Nomor Telepon'); ?>

					<?php 

						$data = array(
							'class' => 'form-control',
							'name' => 'telepon',
							'required' => 'required'

						);


					?>
				<?php echo  form_input($data); ?>
			
		</div>

		<div class="form-group">

			<?php echo form_label('Pilih Informasi yang dibutuhkan'); ?>
			<?php 

				$data = array(

					'1' => 'Peminjaman Sarana dan Prasarana',
					'2' => 'Kerjasama',
					'3' => 'Pendidikan dan Pelatihan',
					'4' => 'Lainnya'


				);
				$option = array('class' => 'form-control rounded-0');
				echo form_dropdown('informasi',$data,'',$option);
			?>

		</div>

		<div class="form-group">
			<?php echo form_label('Tuliskan jenis informasi yang dibutuhkan'); ?>
				<?php 

					$data = array(

							'class' => 'form-control form-control-md rounded-0',
							'name' => 'deskripsi_informasi',
							'required' => 'required'

					);

				?>

				<?php echo form_textarea($data); ?>

		</div>
		<div class="form-group">
			<?php echo form_label('Kegunaan atau kebermanfaatan informasi'); ?>
				<?php 

					$data = array(

							'class' => 'form-control form-control-md rounded-0',
							'name' => 'deskripsi_kegunaan',
							'required' => 'required'

					);

				?>

				<?php echo form_textarea($data); ?>

		</div>
		

		<div class="form-check">
		  	<label>Klik bila anda setuju untuk menyatakan bahwa data yang anda masukan ke dalam form ini adalah benar</label><br>
		    <label class="form-check-label g-mb-20">
		      <input type="checkbox" class="form-check-input mr-1" id="chkSend" name="setuju" required="required">Setuju
		    </label>
		  </div>
	
		<div class="form-group">
			
			<?php 

				$data  = array(
					'class' => 'btn btn-md u-btn-3d u-btn-blue g-mr-10 g-mb-15',
					'name' => 'submit',
					'value' => 'Kirim',
					'id' => 'myDIV',
					'style' => 'display:none'
					
				);



			?>
			
			<?php echo form_submit($data); ?>
			
		</div>
	
		<?php echo form_close(); ?>

</div>
