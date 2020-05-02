<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Customer</h1>
          </div>
      <form method="POST" action="<?php echo base_url('admin/data_customer/tambah_customer_aksi') ?>">
       
      <div class="form-group">
          <label for="">Nama</label>
          <input type="text" name="nama" class="form-control">
          <?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
      </div>

      <div class="form-group">
          <label for="">Username</label>
          <input type="text" name="username" class="form-control">
          <?php echo form_error('username','<span class="text-small text-danger">','</span>') ?>
      </div>

      <div class="form-group">
          <label for="">Alamat</label>
          <input type="text" name="alamat" class="form-control">
          <?php echo form_error('alamat','<span class="text-small text-danger">','</span>') ?>
      </div>

      <div class="form-group">
          <label for="">Gender</label>
          <select class="form-control" name="gender">
              <option value="">Pilih Gender</option>
              <option value="laki-laki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>
          </select>
          <?php echo form_error('gender','<span class="text-small text-danger">','</span>') ?>
      </div>

      <div class="form-group">
          <label for="">Telepon</label>
          <input type="text" name="no_tlp" class="form-control">
          <?php echo form_error('no_tlp','<span class="text-small text-danger">','</span>') ?>
      </div>

      <div class="form-group">
          <label for="">KTP</label>
          <input type="text" name="no_ktp" class="form-control">
          <?php echo form_error('no_ktp','<span class="text-small text-danger">','</span>') ?>
      </div>

      <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="password" class="form-control">
          <?php echo form_error('password','<span class="text-small text-danger">','</span>') ?>
      </div>

      <button type="submit" class="btn btn-sm btn-primary">Submit</button>
      <button type="reset" class="btn btn-sm btn-danger">Reset</button>

    </form>
</section>
</div>