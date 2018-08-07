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
          <form action="<?php echo base_url('pendaftaran/input');?>" method="post">
            <div class="card-header">
              <h3 class="card-title">Input Pendaftaran
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="notifications">
                <?php echo $this->session->flashdata('msg'); ?>
              </div>
              <div class="alert alert-info" role="alert">
                Data Calon Siswa
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
                  <select name="dftr_ta_id" class="form-control" required>
                    <?php foreach ($ta as $list) { ?>
                    <option value="<?php echo $list['ta_id'];?>">
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
                  <textarea name="dftr_alamat" class="form-control" placeholder="Alamat">
                  </textarea>
                </div>
              </div>
              <div class="alert alert-info" role="alert">
                Data Orang Tua / Wali
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Nama Ayah
                </label>
                <div class="col-lg-4">
                  <input type="text" name="ortu_nama_ayah" class="form-control" placeholder="Nama Ayah" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">No HP Ayah
                </label>
                <div class="col-lg-4">
                  <input type="text" name="ortu_nohp_ayah" class="form-control" placeholder="No HP Ayah" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Pekerjaan Ayah
                </label>
                <div class="col-lg-4">
                  <input type="text" name="ortu_pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Nama Ibu
                </label>
                <div class="col-lg-4">
                  <input type="text" name="ortu_nama_ibu" class="form-control" placeholder="Nama Ibu" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">No HP Ibu
                </label>
                <div class="col-lg-4">
                  <input type="text" name="ortu_nohp_ibu" class="form-control" placeholder="No HP Ibu" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Pekerjaan Ibu
                </label>
                <div class="col-lg-4">
                  <input type="text" name="ortu_pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Alamat Orang Tua
                </label>
                <div class="col-lg-4">
                  <textarea name="ortu_alamat" class="form-control" placeholder="Alamat Orang Tua">
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