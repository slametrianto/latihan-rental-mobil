<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Input Data Mobil</h1>
          </div>

          <div class="card">
              <div class="card-body">
                  <form method="POST" action="<?php echo base_url('admin/data_mobil/tambah_mobil_aksi') ?>" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="">Type Mobil</label>
                          <select name="kode_type" class="form-control">
                              <option value="">pilih type mobil</option>
                              <?php foreach($type as $tp) : ?>
                                <option value="<?php echo $tp->kode_type ?>">
                            <?php echo $tp->nama_type ?></option>
                            <?php endforeach ?>
                          </select>
                          <?php echo form_error('kode_type', '<div class="text-small text-danger">','</div>')?>
                      </div>

                      <div class="form-group">
                          <label for="">Merk</label>
                          <input type="text" name="merk" class="form-control">
                          <?php echo form_error('merk', '<div class="text-small text-danger">','</div>')?>

                      </div>

                      <div class="form-group">
                          <label for="">No Plat</label>
                          <input type="text" name="no_plat" class="form-control">
                          <?php echo form_error('no_plat', '<div class="text-small text-danger">','</div>')?>

                      </div>

                      <div class="form-group">
                          <label for="">Warna</label>
                          <input type="text" name="warna" class="form-control">
                          <?php echo form_error('warna', '<div class="text-small text-danger">','</div>')?>

                      </div>

                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                          <label for="">Tahun</label>
                          <input type="text" name="tahun" class="form-control">
                          <?php echo form_error('tahun', '<div class="text-small text-danger">','</div>')?>

                      </div>

                      <div class="form-group">
                          <label for="">Status</label>
                          <select name="status" class="form-control">
                              <option value="">pilih status</option>
                              <option value="1">Tersedia</option>
                              <option value="0">Tidak Tersedia</option>
                          </select>
                          <?php echo form_error('status', '<div class="text-small text-danger">','</div>')?>

                      </div>

                      <div class="form-group">
                          <label for="">Gambar</label>
                          <input type="file" name="gambar" class="form-control">
                      </div>

                      <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                      <button type="submit" class="btn btn-danger mt-4">Reset</button>
                      
                    </div>
                  </div>
               </form>
              </div>
          </div>

</section>
</div>