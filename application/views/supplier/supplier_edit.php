

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Suplier
        <small>Suplier</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li><a href="#barang" data-toggle="tab">Barang Disuplai</a></li>
              <li class="active"><a href="#profil" data-toggle="tab">Profil</a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i>Detail</li>
            </ul>
            <form class="form-horizontal">
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane" id="barang" style="position: relative; height: 500px;">  
                <div class="col-md-12">
                  <div class = "row">
                    <div class="box box-info">
                      <div class="box-body">
                        <div class="col-md-4">
                          <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-default">
                            Tambah Data Barang
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class = "row">
                    <div class="box box-warning">
                      <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>Kode Barang</th>
                              <th>Nama Barang</th>
                              <th>Kapasitas Per Hari</th>
                              <th>Minimal Order</th>
                              <th>Waktu Pengiriman</th>
                              <th>Action</th>
                            </tr>
                            <tr>
                              <td><input type="text" class="form-control" value="BRG001" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" value="Barang 01" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" value="30" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" value="15" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" value="3 Hari"></td>
                              <td><button type="button" class="btn btn-block btn-danger">X</button></td>
                            </tr>
                            <tr>
                              <td><input type="text" class="form-control" value="BRG002" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" value="Barang 02" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" value="50" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" value="30" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" value="4 Hari"></td>
                              <td><button type="button" class="btn btn-block btn-danger">X</button></td>
                            </tr>                            
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- end of chart tab-pane-->
              <div class="chart tab-pane active" id="profil" style="position: relative; height: 300px;">
                <div class="col-md-6">
                  <div class="box box-info">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="kodeSuplier" class="col-sm-4 control-label">Kode Suplier</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="kodeSuplier" name = "kodeSuplier" value="SPL001">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namaSuplier" class="col-sm-4 control-label">Nama Suplier</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="namaSuplier" value="Suplier 001">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namaSuplier" class="col-sm-4 control-label">Alamat</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="alamar" value ="jl. alamat suplier">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namaSuplier" class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="namaSuplier" value="email@suplier.com">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namaSuplier" class="col-sm-4 control-label">No Telpon</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="namaSuplier" value="(telp) - suplier">
                        </div>
                      </div>
                    </div><!-- /.box-body -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box box-info">
                    <!-- form start -->
                    <div class="box-body">
                      <div class="form-group">
                        <label for="kodeSuplier" class="col-sm-4 control-label">Contact Person</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="contactPerson" value="Wakil Suplier">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namaSuplier" class="col-sm-4 control-label">No. NPWP</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="namaSuplier" value = "001.34.12234">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namaSuplier" class="col-sm-4 control-label">No. SIUP</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="namaSuplier" value="SIUP.123.234">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namaSuplier" class="col-sm-4 control-label">No. KTP</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="namaSuplier" value="KTP">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namaSuplier" class="col-sm-4 control-label">Time Of Payment</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="namaSuplier" value="30 Hari">
                        </div>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-block btn-primary">SIMPAN PERUBAHAN</button>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                </div>
              </div> <!-- chart tab-pane avtive -->
            </div> <!-- tab-content no-padding -->
            </form>
          </div> <!-- nav-tabs-custom-->
        </div> <!-- col -md-12-->
      </div> <!-- row-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Barang</h4>
        </div>
        <form class="form-horizontal">
        <div class="modal-body">
            <div class="box box-info">
              <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                  <label for="kodeSuplier" class="col-sm-4 control-label">Nama Barang</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="namaBarang" name = "namaSuplier=" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="namaSuplier" class="col-sm-4 control-label">Kapasitas Per Hari</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="namaSuplier" placeholder="Kapasitas" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="namaSuplier" class="col-sm-4 control-label">Minimal Order</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="namaSuplier" placeholder="Minimal Order" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="namaSuplier" class="col-sm-4 control-label">Waktu Pengiriman</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="namaSuplier" placeholder="Waktu Pengiriman" required>
                  </div>
                </div>
              </div>
            </div><!-- /.box-body -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
            <!-- /.modal-content -->
    </div>
          <!-- /.modal-dialog -->
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<!-- <script src="bower_components/jquery/dist/jquery.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<!-- <script src="bower_components/jquery-ui/jquery-ui.min.js"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- <script>
  $.widget.bridge('uibutton', $.ui.button);
</script> -->
<!-- Bootstrap 3.3.7 -->
<!-- <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->

<!-- DataTables -->
<!-- <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script> -->
<!-- <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->
<!-- Bootstrap WYSIHTML5 -->
<!-- <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->
<!-- Slimscroll -->
<!-- <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script> -->
<!-- FastClick -->
<!-- <script src="bower_components/fastclick/lib/fastclick.js"></script> -->
<!-- AdminLTE App -->
<!-- <script src="dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html> -->