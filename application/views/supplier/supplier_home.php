
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        HOME
        <small>SUPPLIER</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Supplier</a></li>
        <li class="active">Home</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Suplier</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Supplier</th>
                  <th>Nama Suplier</th>
                  <th>Alamat</th>
                  <th>Contact</th>
                  <th>No. Telp</th>
                  <th>Detail</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    foreach ($listSupplier as $row) {                    
                  ?>
                  <tr>
                    <td><?php echo $row->KODE; ?></td>
                    <td><?php echo $row->NAMA; ?></td>
                    <td><?php echo $row->ALAMAT1;?></td>
                    <td><?php echo $row->CONTACT_PERSON;?></td>
                    <td><?php echo $row->TELPON;?></td>
                    <td>
                      <button type="button" class="btn btn-block btn-success">Detail</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-warning">Edit</button>
                    </td>
                  </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
              <!-- Tabs within a box -->
              <ul class="nav nav-tabs pull-right">
                <li><a href="#revenue-chart" data-toggle="tab">PO</a></li>
                <li><a href="#" data-toggle="tab">PO Terlambat</a></li>
                <li><a href="#profil" data-toggle="tab">Barang Disuplai</a></li>
                <li class="active"><a href="#profil" data-toggle="tab">Profil</a></li>
                <li class="pull-left header"><i class="fa fa-inbox"></i>Detail</li>

              </ul>
              <div class="tab-content no-padding">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane" id="revenue-chart" style="position: relative; height: 300px;"></div>
                <div class="chart tab-pane active" id="profil" style="position: relative; height: 300px;">
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="box box-info">
                      <!-- form start -->
                      <form class="form-horizontal">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="kodeSuplier" class="col-sm-4 control-label">Kode Suplier</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="kodeSuplier" name = "kodeSuplier" placeholder="Kode Suplier">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="namaSuplier" class="col-sm-4 control-label">Nama Suplier</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="namaSuplier" placeholder="Nama Suplier">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="namaSuplier" class="col-sm-4 control-label">Alamat</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="namaSuplier" placeholder="Alamat">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="namaSuplier" class="col-sm-4 control-label">Email</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="namaSuplier" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="namaSuplier" class="col-sm-4 control-label">No Telpon</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="namaSuplier" placeholder="No Telpon">
                            </div>
                          </div>
                        </div>
                        <!-- /.box-body -->
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="box box-info">
                      <!-- form start -->
                      <form class="form-horizontal">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="kodeSuplier" class="col-sm-4 control-label">Contact Person</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="kodeSuplier" name = "kodeSuplier" placeholder="Contact Person">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="namaSuplier" class="col-sm-4 control-label">No. NPWP</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="namaSuplier" placeholder="No. NPWP">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="namaSuplier" class="col-sm-4 control-label">No. SIUP</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="namaSuplier" placeholder="No. SIUP">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="namaSuplier" class="col-sm-4 control-label">No. KTP</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="namaSuplier" placeholder="No. KTP">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="namaSuplier" class="col-sm-4 control-label">Time Of Payment</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="namaSuplier" placeholder="TOP">
                            </div>
                          </div>
                        </div>
                        <!-- /.box-body -->
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  