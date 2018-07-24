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
              <a href="<?php echo base_url('pendaftaran/input')?>" type="button" class="btn btn-sm btn-primary">
                <i class="fa fa-plus">
                </i> Input Pendaftaran
              </a>
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
                <?php $no=1; { ?>
                <tr>
                  <td><?php echo $no ?>
                  </td>
                  <td>
                  </td>
                  <td>
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