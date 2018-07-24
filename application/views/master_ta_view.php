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
            <h3 class="card-title">Master Tahun Ajaran
            </h3>
            <div class="card-tools">
              <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus">
                </i> Tambah Tahun Ajaran
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
            <table id="datatable2" class="table table-bordered table-hover text-center">
              <thead>
                <tr>
                  <th>No
                  </th>
                  <th>Kode Tahun Ajaran
                  </th>
                  <th>Tahun Ajaran
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($ta as $list) { ?>
                <tr>
                  <td><?php echo $no ?>
                  </td>
                  <td><?php echo $list['ta_id']?>
                  </td>
                  <td><?php echo $list['ta_awal']?> / <?php echo $list['ta_akhir']?>
                  </td>
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

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Tahun Ajaran
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;
          </span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('master/tahun_ajaran');?>" method="post">
        <div class="form-group row">
          <label class="col-sm col-form-label text-right">Tahun Ajaran
          </label>
          <div class="col-sm">
            <input type="text" name="ta_awal" class="form-control" placeholder="Awal" required autofocus>
          </div>
          <div class="col-sm">
            <input type="text" name="ta_akhir" class="form-control" placeholder="Akhir" required>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar
        </button>
        <button type="submit" class="btn btn-primary">
          <span class="fa fa-save">
          </span> Simpan
        </button>
      </div>
      </form>
    </div>
  </div>
</div>
