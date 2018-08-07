<!-- Modal -->
<div class="modal fade" id="modal-seleksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <form action="<?php echo base_url('laporan/hasil_seleksi')?>" method="post" target="_BLANK">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Laporan Hasil Seleksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
                <label class="col-lg-12 col-form-label">Periode
                </label>
                <div class="col-lg-12">
                  <input type="text" id="daterangepicker" name="periode" class="form-control">
                </div>
              </div>
               <div class="form-group row">
                <label class="col-lg-12 col-form-label">Jenis Laporan
                </label>
                <div class="col-lg-12">
                  <select name="jenis_laporan" class="form-control">
                    <option value="">Semua</option>
                    <option value="1">Lulus</option>
                    <option value="0">Tidak Lulus</option>
                  </select>
                </div>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Cetak</button>
      </div>
    </div>
  </form>
  </div>
</div>