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
          <form>
            <div class="card-header">
              <h3 class="card-title">Data Pendaftaran
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
                  <input type="text" class="form-control" value="<?php echo $detail['dftr_nodaftar']?>"  readonly>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Tahun Ajaran
                </label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" value="<?php echo $detail['ta_awal']?> / <?php echo $detail['ta_akhir']?>"  readonly>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Nama Calon Siswa
                </label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" value="<?php echo $detail['dftr_nama_calon_siswa']?>"  readonly>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Tempat Lahir
                </label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" value="<?php echo $detail['dftr_tempat_lahir']?>"  readonly>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Tanggal Lahir
                </label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" value="<?php echo $detail['dftr_tgl_lahir']?>"  readonly>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Jenis Kelamin
                </label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" value="<?php echo $detail['dftr_jenkel']?>"  readonly>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Alamat
                </label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" value="<?php echo $detail['dftr_alamat']?>"  readonly>
                </div>
              </div>
              <div class="alert alert-info" role="alert">
                Data Orang Tua / Wali
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Nama Ayah
                </label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" value="<?php echo $detail['ortu_nama_ayah']?>"  readonly>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Nomor HP Ayah
                </label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" value="<?php echo $detail['ortu_nohp_ayah']?>"  readonly>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Pekerjaan Ayah
                </label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" value="<?php echo $detail['ortu_pekerjaan_ayah']?>"  readonly>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Nama Ibu
                </label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" value="<?php echo $detail['ortu_nama_ibu']?>"  readonly>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Nomor HP Ibu
                </label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" value="<?php echo $detail['ortu_nohp_ibu']?>"  readonly>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Pekerjaan Ibu
                </label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" value="<?php echo $detail['ortu_pekerjaan_ibu']?>"  readonly>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label text-right">Alamat Orang Tua
                </label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" value="<?php echo $detail['ortu_alamat']?>"  readonly>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
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