<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Dashboard
          <small>Control panel</small>
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
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Data Purchase Requisition</h3>
                </div>
                <form class="form-horizontal">
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Kode PR</th>
                        <th>Tanggal Dibuat</th>
                        <th>#</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>PR03122017-001</td>
                        <td>20 Desember 2016</td>
                        <td>
                          <button type="button" class="btn btn-block btn-success">DETAIL</button>
                        </td>

                      </tr>
                      <tr>
                        <td>PR03122017-002</td>
                        <td>21 Desember 2016</td>
                        <td>
                          <button type="button" class="btn btn-block btn-success">DETAIL</button>
                        </td>

                      </tr>
                      <tr>
                        <td>PR03122017-003</td>
                        <td>22 Desember 2016</td>
                        <td>
                          <button type="button" class="btn btn-block btn-success">DETAIL</button>
                        </td>

                      </tr>
                      <tr>
                        <td>PR03122017-004</td>
                        <td>23 Desember 2016</td>
                        <td>
                          <button type="button" class="btn btn-block btn-success">DETAIL</button>
                        </td>
         
                      </tr>
                      <tr>
                        <td>PR03122017-005</td>
                        <td>24 Desember 2016</td>
                        <td>
                          <button type="button" class="btn btn-block btn-success">DETAIL</button>
                        </td>

                      </tr>
                      <tr>
                        <td>PR03122017-006</td>
                        <td>26 Desember 2016</td>
                        <td>
                          <button type="button" class="btn btn-block btn-success">DETAIL</button>
                        </td>

                      </tr>
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">DETAIL PURCHASE REQUISITION</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <form class="form-horizontal">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group has-warning">
                        <label for="kodeScheduling" class="col-sm-4 control-label">Kode PR</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="kodeScheduling" name = "kodePr" value = "PR03122017-001" readonly>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                      <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Tanggal Dibutuhkan</th>
                      </tr>
                      <tr>
                        <td><input type="text" class="form-control" id="kodeBarang" value="PET001" readonly></td>
                        <td><input type="text" class="form-control" id="namaBarang" value="PET FOIL" readonly></td>
                        <td><input type="text" class="form-control" id="kodeBarang" value = "15 KG" readonly></td>
                        <td><input type="text" class="form-control" id="namaBarang" value="03 Januari 2017" readonly></td>
                      </tr>
                      <tr>
                        <td><input type="text" class="form-control" id="kodeBarang" value="TL001" readonly></td>
                        <td><input type="text" class="form-control" id="namaBarang" value="TOLUOL" readonly></td>
                        <td><input type="text" class="form-control" id="kodeBarang" value = "20 KG" readonly></td>
                        <td><input type="text" class="form-control" id="namaBarang" value="07 Januari 2017" readonly></td>
                      </tr>
                    </table>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                      <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-default">EDIT</button>
                  </div>
                  </div>
                  </form>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
          </div>
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
                <h4 class="modal-title">Edit Purchase Requisition</h4>
            </div>
            <form class="form-horizontal">
            <div class="modal-body">
                <div class="box box-info">
                  <!-- form start -->
                  <div class="row">
                    <div class="box-body">
                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover">
                        <tr>
                          <th>#</th>
                          <th>Kode Barang</th>
                          <th>Nama Barang</th>
                          <th>Jumlah</th>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td><input type="text" class="form-control" id="kodeBarang" value="PET001" readonly></td>
                          <td><input type="text" class="form-control" id="namaBarang" value="PET FOIL" readonly></td>
                          <td><input type="text" class="form-control" id="jumlah" value="5 ROLL" readonly></td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td><input type="text" class="form-control" id="kodeBarang" value="TL001" readonly></td>
                          <td><input type="text" class="form-control" id="namaBarang" value="TOLUOL" readonly></td>
                          <td><input type="text" class="form-control" id="jumlah" value="20 KG" readonly></td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td><input type="text" class="form-control" id="kodeBarang" value="PGB003" readonly></td>
                          <td><input type="text" class="form-control" id="namaBarang" value="PIGMENT BLUE" readonly></td>
                          <td><input type="text" class="form-control" id="jumlah" value="20 KG" readonly></td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td><input type="text" class="form-control" id="kodeBarang" value="PGR010" readonly></td>
                          <td><input type="text" class="form-control" id="namaBarang" value="PIGMENT RED" readonly></td>
                          <td><input type="text" class="form-control" id="jumlah" value="50 KG" readonly></td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td><input type="text" class="form-control" id="kodeBarang" value="HTS043" readonly></td>
                          <td><input type="text" class="form-control" id="namaBarang" value="HEAT SEAL" readonly></td>
                          <td><input type="text" class="form-control" id="jumlah" value="30 KG" readonly></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-12">
                      <button type="submit" class="btn btn-info pull-right">PILIH</button>
                  </div>
                  </div>
                  <div class="box-body">
                    <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                      <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Tanggal Dibutuhkan</th>
                        <th>#</th>
                      </tr>
                      <tr>
                        <td><input type="text" class="form-control" id="kodeBarang" value="PET001" readonly></td>
                        <td><input type="text" class="form-control" id="namaBarang" value="PET FOIL" readonly></td>
                        <td><input type="text" class="form-control" id="kodeBarang"></td>
                        <td><input type="text" class="form-control" id="namaBarang" value="03 Januari 2017"></td>
                        <td><button type="button" class="btn btn-block btn-danger">X</button></td>
                      </tr>
                      <tr>
                        <td><input type="text" class="form-control" id="kodeBarang" value="TL001" readonly></td>
                        <td><input type="text" class="form-control" id="namaBarang" value="TOLUOL" readonly></td>
                        <td><input type="text" class="form-control" id="kodeBarang"></td>
                        <td><input type="text" class="form-control" id="namaBarang" value="07 Januari 2017"></td>
                        <td><button type="button" class="btn btn-block btn-danger">X</button></td>
                      </tr>
                    </table>
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