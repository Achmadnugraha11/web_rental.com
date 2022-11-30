<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>
      
   <div class="row">
      <div class="col-lg-6">
      <?= $this->session->flashdata('message');?>
      <form action="<?= base_url('user/changepassword') ;?>" method="POST"> 
         <div class="form-group">
            <label for="current_password">Password Saat Ini</label>
            <input type="password" class="form-control" id="current_password" name="current_password">
            <?= form_error('current_password', '<small class="text-danger pl-2">', '</small>')?>
         </div>
         <div class="form-group">
            <label for="current_password">Password Baru</label>
            <input type="password" class="form-control" id="new_password1" name="new_password1">
            <?= form_error('new_password1', '<small class="text-danger pl-2">', '</small>')?>
         </div>
         <div class="form-group">
            <label for="current_password">Ulangi Password</label>
            <input type="password" class="form-control" id="new_password2" name="new_password2">
            <?= form_error('new_password2', '<small class="text-danger pl-2">', '</small>')?>
         </div>
         <div class="form-group">
            <button type="submit" class="btn btn-primary"> Ganti Password</button>
         </div>

      </form>
      </div>
   </div>
</div>
<!-- End of Main Content -->

            