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
          <div class="card-header">
            <h3 class="card-title">Data Calon Siswa
            </h3>
            <div class="card-tools">
              <a href="<?php echo base_url('pendaftaran/input')?>" type="button" class="btn btn-sm btn-primary">
                <i class="fa fa-plus">
                </i> Input Pendaftaran
              </a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
            <table id="datatable" class="table table-bordered table-hover text-center">
              <thead>
                <tr>
                  <th>No
                  </th>
                  <th>Tahun Ajaran
                  </th>
                  <th>No Pendaftaran
                  </th>
                  <th>Nama Calon Siswa
                  </th>
                  <th>Jenis Kelamin
                  </th>
                  <th>Tanggal Lahir
                  </th>
                  <th>Alamat
                  </th>
                  <th>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($pendaftaran as $list) { ?>
                <tr>
                  <td><?php echo $no ?>
                  </td>
                  <td><?php echo $list['ta_awal']?> / <?php echo $list['ta_akhir']?>
                  </td>
                  <td><?php echo $list['dftr_nodaftar']?></td>
                  <td><?php echo $list['dftr_nama_calon_siswa']?>
                  </td>
                  <td><?php echo $list['dftr_jenkel']?>
                  </td>
                  <td><?php echo $list['dftr_tgl_lahir']?>
                  </td>
                  <td><?php echo $list['dftr_alamat']?>
                  </td>
                  <td><a href="<?php echo base_url('pendaftaran/detail/')?><?php echo $list['dftr_nodaftar'] ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-eye">
                </i>
              </a></td>
                </tr>
              <?php $no++; } ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
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