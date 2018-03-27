<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          HOME
          <small>Purchase Order</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">PO</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Data Purchase Order</h3>
                </div>
                <form class="form-horizontal">
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Kode PO</th>
                        <th>Tanggal Dibuat</th>
                        <th>#</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>PO03122017-001</td>
                        <td>20 Desember 2016</td>
                        <td>
                          <button type="button" class="btn btn-success">DETAIL</button>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">Tambah Delivery</button>
                        </td>
                      </tr>
                      <tr>
                        <td>PO03122017-002</td>
                        <td>21 Desember 2016</td>
                        <td>
                          <button type="button" class="btn btn-success">DETAIL</button>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">Tambah Delivery</button>
                        </td>
                      </tr>
                      <tr>
                        <td>PO03122017-003</td>
                        <td>22 Desember 2016</td>
                        <td>
                          <button type="button" class="btn btn-success">DETAIL</button>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">Tambah Delivery</button>
                        </td>
                      </tr>
                      <tr>
                        <td>PO03122017-004</td>
                        <td>23 Desember 2016</td>
                        <td>
                          <button type="button" class="btn btn-success">DETAIL</button>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">Tambah Delivery</button>
                        </td>
                      </tr>
                      <tr>
                        <td>PO03122017-005</td>
                        <td>24 Desember 2016</td>
                        <td>
                          <button type="button" class="btn btn-success">DETAIL</button>
                          <button type="button" class="btn  btn-warning" data-toggle="modal" data-target="#modal-default">Tambah Delivery</button>
                        </td>
                      </tr>
                      <tr>
                        <td>PO03122017-006</td>
                        <td>26 Desember 2016</td>
                        <td>
                          <button type="button" class="btn btn-success">DETAIL</button>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">Tambah Delivery</button>
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
                  <h3 class="box-title">DETAIL PURCHASE ORDER</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <form class="form-horizontal">
                  <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group has-warning">
                          <label for="kodeScheduling" class="col-sm-2 control-label">Kode P0</label>
                          <div class="col-sm-2">
                            <input type="text" class="form-control" id="kodePo" name = "kodePo" value = "PO03122017-001" readonly>
                          </div>
                        
                          <label for="kodeScheduling" class="col-sm-2 control-label">Kode Delivery</label>
                          <div class="col-sm-2">
                            <input type="text" class="form-control" id="kodePo" name = "kodeDelivery" value = "DLV06122017-002" readonly>
                          </div>
                          <label for="kodeScheduling" class="col-sm-2 control-label">Tanggal Delivery</label>
                          <div class="col-sm-2">
                            <input type="text" class="form-control" id="kodePo" name = "tanggalDelivery" value = "05 Desember 2017" readonly>
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
                          </tr>
                          <tr>
                            <td><input type="text" class="form-control" id="kodeBarang" value="PET001" readonly></td>
                            <td><input type="text" class="form-control" id="namaBarang" value="PET FOIL" readonly></td>
                            <td><input type="text" class="form-control" id="kodeBarang" value = "15 KG" readonly></td>
                          </tr>
                          <tr>
                            <td><input type="text" class="form-control" id="kodeBarang" value="TL001" readonly></td>
                            <td><input type="text" class="form-control" id="namaBarang" value="TOLUOL" readonly></td>
                            <td><input type="text" class="form-control" id="kodeBarang" value = "20 KG" readonly></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  </div>
                  <br>
                  <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group has-warning">
                          <label for="kodeScheduling" class="col-sm-2 control-label">Kode P0</label>
                          <div class="col-sm-2">
                            <input type="text" class="form-control" id="kodePo" name = "kodePo" value = "PO03122017-001" readonly>
                          </div>
                        
                          <label for="kodeScheduling" class="col-sm-2 control-label">Kode Delivery</label>
                          <div class="col-sm-2">
                            <input type="text" class="form-control" id="kodePo" name = "kodeDelivery" value = "DLV06122017-002" readonly>
                          </div>
                          <label for="kodeScheduling" class="col-sm-2 control-label">Tanggal Delivery</label>
                          <div class="col-sm-2">
                            <input type="text" class="form-control" id="kodePo" name = "tanggalDelivery" value = "05 Desember 2017" readonly>
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
                          </tr>
                          <tr>
                            <td><input type="text" class="form-control" id="kodeBarang" value="PET001" readonly></td>
                            <td><input type="text" class="form-control" id="namaBarang" value="PET FOIL" readonly></td>
                            <td><input type="text" class="form-control" id="kodeBarang" value = "15 KG" readonly></td>
                          </tr>
                          <tr>
                            <td><input type="text" class="form-control" id="kodeBarang" value="TL001" readonly></td>
                            <td><input type="text" class="form-control" id="namaBarang" value="TOLUOL" readonly></td>
                            <td><input type="text" class="form-control" id="kodeBarang" value = "20 KG" readonly></td>
                          </tr>
                        </table>
                      </div>
                    </div>
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
                <h4 class="modal-title">PILIH DELIVERY TIME</h4>
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
                          <th>Kode Delivery</th>
                          <th>Tanggal</th>
                          <th>#</th>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control" id="kodeDelivery" value="DLV06122017" readonly></td>
                          <td><input type="text" class="form-control" id="tanggalDelivery" value="06 Desember 2017" readonly></td>
                          <td><button type="button" class="btn btn-success" id="DLV06122017" data-toggle='modal' data-target='#modal-second'>PILIH</button></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control" id="kodeDelivery" value="DLV07122017" readonly></td>
                          <td><input type="text" class="form-control" id="tanggalDelivery" value="07 Desember 2017" readonly></td>
                          <td><button type="button" class="btn btn-success" id="DLV07122017" data-toggle='modal' data-target='#modal-second'>PILIH</button></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control" id="kodeDelivery" value="DLV08122017" readonly></td>
                          <td><input type="text" class="form-control" id="tanggalDelivery" value="08 Desember 2017" readonly></td>
                          <td><button type="button" class="btn btn-success" id="DLV08122017" data-toggle='modal' data-target='#modal-second'>PILIH</button></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control" id="kodeDelivery" value="DLV09122017" readonly></td>
                          <td><input type="text" class="form-control" id="tanggalDelivery" value="09 Desember 2017" readonly></td>
                          <td><button type="button" class="btn btn-success" id="DLV09122017" data-toggle='modal' data-target='#modal-second'>PILIH</button></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control" id="kodeDelivery" value="DLV10122017" readonly></td>
                          <td><input type="text" class="form-control" id="tanggalDelivery" value="10Desember 2017" readonly></td>
                          <td><button type="button" class="btn btn-success" id="DLV10122017" data-toggle='modal' data-target='#modal-second'>PILIH</button></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  </div>
                </div><!-- /.box-body -->
            </div>
            </form>
          </div>
                <!-- /.modal-content -->
        </div>
              <!-- /.modal-dialog -->
      </div>
      <div class="modal fade" id="modal-second">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">BARANG</h4>
            </div>
            <form class="form-horizontal">
            <div class="modal-body">
                <div class="box box-info">
                  <!-- form start -->
                  <div class="row">
                    <div class="box-body">
                    <div class="box-body table-responsive no-padding">
                      <div class="form-group has-warning">
                          <label for="kodeDelivery" class="col-sm-3 control-label">Kode Delivery</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="kodeDeliveryModal" name = "kodeDeliveryModal" readonly>
                          </div>
                      </div>
                      <table class="table table-hover">
                        <tr>
                          <th>Kode Barang</th>
                          <th>Nama Barang</th>
                          <th>Jumlah</th>
                        </tr>
                         <tr>
                          <td><input type="text" class="form-control" id="kodeBarang" value="PET001" readonly></td>
                          <td><input type="text" class="form-control" id="namaBarang" value="PET FOIL" readonly></td>
                          <td><input type="text" class="form-control" id="kodeBarang" value = "15 KG"></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control" id="kodeBarang" value="TL001" readonly></td>
                          <td><input type="text" class="form-control" id="namaBarang" value="TOLUOL" readonly></td>
                          <td><input type="text" class="form-control" id="kodeBarang" value = "20 KG"></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                      <button type="button" class="btn btn-info pull-right">SIMPAN</button>
                  </div>
                  </div>
                </div><!-- /.box-body -->
            </div>
            </form>
          </div>
                <!-- /.modal-content -->
        </div>
              <!-- /.modal-dialog -->
      </div>