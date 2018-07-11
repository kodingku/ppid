<h1 class="text-center">Sertifikat 2016 NTB</h1>

<?php 
  
  if ($this->session->flashdata('sertifikat_registered')) {
    ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <strong><?php  echo $this->session->flashdata('sertifikat_registered'); ?></strong> 
      </div>
   
    <?php 
     }
    ?>

    <?php 
  
  if ($this->session->flashdata('update_sertifikat')) {
    ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <strong><?php  echo $this->session->flashdata('update_sertifikat'); ?></strong> 
      </div>
   
    <?php 
     }
    ?>

     <?php 
  
  if ($this->session->flashdata('delete_sertifikat')) {
    ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <strong><?php  echo $this->session->flashdata('delete_sertifikat'); ?></strong> 
      </div>
   
    <?php 
     }
    ?>


  <a href="<?php echo base_url()?>Sertifikat_2016/create_sertifikat_ntb" class="btn btn-md u-btn-3d u-btn-blue  g-mb-15"><i class="fas fa-plus"></i> Sertifikat</a>



<div class="row">
  <?php 

    foreach ($ntb as $data) {
  ?>
  <div class="col-lg-4 g-mb-30">
    <!-- Article -->
    <article class="u-block-hover g-mb-10">
      <figure class="u-bg-overlay g-bg-black-opacity-0_3--after">
        <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="<?php echo base_url()?>assets/img/logo.png" alt="Image Description">
      </figure>

      <span class="g-pos-abs g-top-20 g-left-20">
        <a class="btn u-btn-blue rounded-0" href="#">NTB</a>
      </span>

      <header class="g-pos-abs g-right-20 g-bottom-10 g-left-20">
        <span class="g-color-white">
         
          <?php echo $data->tgl_upload ?>
        </span>
        <h3 class="h2 g-font-weight-600">
          <a class="g-color-white" href="#"><?php echo $data->nip ?></a>
        </h3>
      </header>
    </article>
    <div class="text-center">
      <a href="<?php echo base_url()?>Sertifikat_2016/edit_ntb/<?php echo $data->id_sert ?>" class="btn btn-md u-btn-inset u-btn-outline-orange g-mr-10 g-mb-15">Edit</a>
      <a href="<?php echo base_url()?>Sertifikat_2016/delete_ntb/<?php echo $data->id_sert ?>" class="btn btn-md u-btn-inset u-btn-outline-red g-mr-10 g-mb-15">Delete</a>
      <a href="<?php echo base_url()?>Sertifikat_2016/view_ntb/<?php echo $data->id_sert ?>" class="btn btn-md u-btn-inset u-btn-outline-primary g-mr-10 g-mb-15">View</a>
    </div>
    <!-- End Article -->
  </div>
  <?php 


    }

  ?>
 </div>

