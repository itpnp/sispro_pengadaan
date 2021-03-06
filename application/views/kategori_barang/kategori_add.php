<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Add Supplier</small>
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
              
              <li class="pull-left header"><i class="fa fa-inbox"></i>Kategori Barang</li>
            </ul>
            <form class="form-horizontal" action="<?php echo site_url('admin/KategoriBarangController/save'); ?>" method="post">
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane" id="barang" style="position: relative; height: 500px;">  
                <div class="col-md-12">
                  <div class = "row">
                    <div class="box box-info">
                      <div class="box-body">
                        <div class="col-md-4">
                          <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-default">
                            Data  Kategori Barang
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
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><button type="button" class="btn btn-block btn-danger">X</button></td>
                            </tr>
                            <tr>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><button type="button" class="btn btn-block btn-danger">X</button></td>
                            </tr>
                            <tr>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><button type="button" class="btn btn-block btn-danger">X</button></td>
                            </tr>
                            <tr>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><button type="button" class="btn btn-block btn-danger">X</button></td>
                            </tr>
                            <tr>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><input type="text" class="form-control" id="kodeBarang"></td>
                              <td><button type="button" class="btn btn-block btn-danger">X</button></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- end of chart tab-pane-->
              <div class="chart tab-pane active" id="profil" style="position: relative; height: 600px;">
                <div class="col-md-6">
                  <div class="box box-info">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="kodeSuplier" class="col-sm-4 control-label">Kode Suplier</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="kodeSupplier" value="<?php if($lastNumber != null) echo $lastNumber ?>" name = "kodeSupplier" placeholder="Kode Suplier" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namaSuplier" class="col-sm-4 control-label">Nama Suplier</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="namaSupplier" name="namaSupplier" placeholder="Nama Suplier">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nickname" class="col-sm-4 control-label">Nickname</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Nama Suplier">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="alamat1" class="col-sm-4 control-label">Alamat 1</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name = "alamat1" id="alamat1" placeholder="Alamat">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="alamat2" class="col-sm-4 control-label">Alamat 2</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name = "alamat2" id="alamat2" placeholder="Alamat">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="kota" class="col-sm-4 control-label">Kota</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name = "kota" id="kota" placeholder="Kota">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="negara" class="col-sm-4 control-label">Negara</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name = "negara" id="negara" placeholder="Negara">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="noTelp" class="col-sm-4 control-label">No Telpon</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="noTelp" name="noTelp" placeholder="No Telpon">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="fax" class="col-sm-4 control-label">Fax</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="fax" name="fax" placeholder="Fax">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="kodeArea" class="col-sm-4 control-label">Kode Area</label>
                        <div class="col-sm-8">
                          <select class="form-control select2" name="kodeArea" style="width: 100%;">
                            <?php
                              foreach ($listArea as $row) {
                            ?>
                              <option value="<?php echo $row->KODE_AREA?>"><?php echo $row->AREA?></option>
                            <?php
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div><!-- /.box-body -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box box-info">
                    <!-- form start -->
                      <br>
                      <div class="form-group">
                        <label for="kodeSales" class="col-sm-4 control-label">Nama Sales</label>
                        <div class="col-sm-8">
                          <select class="form-control select2" name="kodeSales" style="width: 100%;">
                            <?php
                              foreach ($listSales as $row) {
                            ?>
                              <option value="<?php echo $row->KODE_SALES ?>"><?php echo $row->NAMA_SALES?></option>
                            <?php
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="kodeCollector" class="col-sm-4 control-label">Nama Collector</label>
                        <div class="col-sm-8">
                          <select class="form-control select2" name="kodeCollector" style="width: 100%;">
                            <?php
                              foreach ($listCollector as $row) {
                              
                            ?>
                              <option value="<?php echo $row->KODE_COLLECTOR ?>"><?php echo $row->NAMA_COLLECTOR?></option>
                            <?php
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Status</label>
                        <div class="col-sm-8">
                          <label for="pkp" class="col-sm-6 control-label">
                            <input type="radio" name="statusPkp" value="1" class="flat-red">
                            PKP
                          </label>
                          <label for="nonPkp" class="col-sm-6 control-label">
                            <input type="radio" name="statusPkp" value="0" class="flat-red">
                            NON PKP
                          </label>
                        </div>
                      </div>
                    <div class="box-body">
                      <div class="form-group">
                        <label for="contactPerson" class="col-sm-4 control-label">Contact Person</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="contactPerson" name = "contactPerson" placeholder="Contact Person">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="npwp" class="col-sm-4 control-label">No. NPWP</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="npwp" name="npwp" placeholder="No. NPWP">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Status VIP</label>
                        <div class="col-sm-8">
                          <label for="vip" class="col-sm-6 control-label">
                            <input type="radio" name="statusVip" value="1" class="flat-red">
                            VIP
                          </label>
                          <label for="reguler" class="col-sm-6 control-label">
                            <input type="radio" name="statusVip" value="0" class="flat-red">
                            REGULER
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="kodeKeuangan" class="col-sm-4 control-label">Kode Keuangan</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="kodeKeuangan" name="kodeKeuangan" placeholder="kode Keuangan" readonly>
                        </div>
                        <div class="col-sm-2">
                          <button type="button" class="btn btn-block btn-success">+</button>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namaBank" class="col-sm-4 control-label">Nama Bank</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="namaBank" name="namaBank" placeholder="Nama Bank">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nomorAccount" class="col-sm-4 control-label">Nomor Account</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="nomorAccount" name="nomorAccount" placeholder="Atas Nama">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="atasNama" class="col-sm-4 control-label">Atas Nama</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="atasNama" name="atasNama" placeholder="Atas Nama">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="timeOfPayment" class="col-sm-4 control-label">Time Of Payment</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="top" name="top" placeholder="TOP">
                        </div>
                        <div class="col-sm-4">
                          <select class="form-control select2" name="satuanTop" style="width: 100%;">
                            <option selected="selected">Hari</option>
                            <option value="bulan">Bulan</option>
                            <option value="tahun">Tahun</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-8">
                        <button type="submit" class="btn btn-block btn-primary">SIMPAN</button>
                        </div>
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