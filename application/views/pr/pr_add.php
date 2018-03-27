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
            <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Data Scheduling</h3>
                </div>
                <form class="form-horizontal">
                <div class="box-body">
                  <div class="form-group">
                    <label for="kodeScheduling" class="col-sm-4 control-label">Kode Scheduling</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kodeScheduling" name = "kodeScheduling" value = "SCH001" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="kodeMps" class="col-sm-4 control-label">Kode MPS</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kodeMps" value="MPS001" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="periode" class="col-sm-4 control-label">Periode</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="periode" value="01 Januari 2017 - 07 Januari 2017" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tanggalDibuat" class="col-sm-4 control-label">Tanggal Dibuat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tanggalDibuat" value="28 Desember 2016"  readonly>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Data Barang</h3>
                </div>
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
                  <div class="col-md-12">
                      <button type="submit" class="btn btn-info pull-right">PILIH</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">PR03122017-001</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <form class="form-horizontal">
                  <div class="row">
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
                  <div class="row">
                  <div class="col-md-12">
                      <button type="submit" class="btn btn-info pull-right">OPEN PR</button>
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