<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card card-warning card-outline">
          <form action="<?php echo base_url('pendaftaran');?>">
          <div class="card-header">
            <h3 class="card-title">Input Pendaftaran
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="notifications">
              <?php echo $this->session->flashdata('msg'); ?>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label text-right">Nomor Pendaftaran
              </label>
              <div class="col-lg-4">
                <input type="text" name="dftr_nodaftar" class="form-control" value="<?php echo $nodaftar?>" required readonly>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label text-right">Tahun Ajaran
              </label>
              <div class="col-lg-4">
                <select name="dftr_tahun_ajaran" class="form-control" required>
                  <option>Tahun Ajaran
                  </option>
                  <?php foreach ($ta as $list) { ?>
                  <option>
                    <?php echo $list['ta_awal'];?>/
                    <?php echo $list['ta_akhir'];?>
                  </option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label text-right">Nama Calon Siswa
              </label>
              <div class="col-lg-4">
                <input type="text" name="dftr_nama_calon_siswa" class="form-control" placeholder="Nama Calon Siswa" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label text-right">Tempat Lahir
              </label>
              <div class="col-lg-4">
                <input type="text" name="dftr_tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label text-right">Tanggal Lahir
              </label>
              <div class="col-lg-4">
                <input type="date" name="dftr_tgl_lahir" class="form-control" placeholder="Nomor Pendaftaran" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label text-right">Jenis Kelamin
              </label>
              <div class="col-lg-2">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <input type="radio" name="dftr_jenkel" value="L">
                    </span>
                  </div>
                  <input type="text" class="form-control" value="Laki - Laki" readonly>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <input type="radio" name="dftr_jenkel" value="P">
                    </span>
                  </div>
                  <input type="text" class="form-control" value="Perempuan" readonly>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label text-right">Alamat
              </label>
              <div class="col-lg-4">
                <textarea name="dftr_alamat" class="form-control" rows="3" placeholder="Alamat">
                </textarea>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary">Input Pendaftaran
            </button>
          </div>
        </form>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->