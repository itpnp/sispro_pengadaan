     <script type='text/javascript'>
    function ambil_data(tes,tes2)
    {
	alert (tes);
    }	
  //return true;
  </script>
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        HOME
        <small>KATEGORI BARANG</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> KATEGORI BARANG</a></li>
        <li class="active">Home</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Kategori Barang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kategori</th>
                  
                </tr>
                </thead>
                <tbody>
					<form id="form1" name="form1" method="get" action="" >
                  <?php
				          $i=1;
                    foreach ($listKategori as $row) {                    
                  ?>
                  <tr>
                    <td><?php echo $row->ID_KATEGORI; ?></td>
                    <td><?php echo $row->NAMA_KATEGORI; ?></td>
					           <td>
                      <input type='button'  id = '<?php echo $row->ID_KATEGORI; ?>@<?php echo $row->NAMA_KATEGORI; ?>' value='DETAIL' class="btn btn-block btn-success" data-toggle="modal" data-target='#modal-default'>
                    </td>
                   
                  </tr>
                  <?php
				   //echo $ids2;
				    $i++;
                    }
                  ?>
				  </form>
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
             
                <li class="pull-left header"><i class="fa fa-inbox"></i>Isi Data Baru</li>

              </ul>
              <div class="tab-content no-padding">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane" id="revenue-chart" style="position: relative; height: 300px;"></div>
                <div class="chart tab-pane active" id="profil" style="position: relative; height: 300px;">
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="box box-info">
                      <!-- form start -->
                      <form class="form-horizontal"  action="<?php echo site_url('admin/KategoriBarangController/save');?>" method="post">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="kodeSuplier" class="col-sm-4 control-label">Kode Kategori Barang</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="kodeKategori" name = "kodeKategori" placeholder="Kode Kategori" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="namaSuplier" class="col-sm-4 control-label">Nama Kategori Barang</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="namaKategori" placeholder="namaKategori" name ="namaKategori">
                            </div>
                          </div>
                           <div class="box-footer">
                               <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                        <!-- /.box-body -->
                      </form>
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

  
  <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">EDIT KATEGORI BARANG</h4>
              </div>
              <div class="modal-body">
               <label for="kodeSuplier" class="col-sm-4 control-label">Kode Kategori Barang</label>
                 <div class="col-sm-8">
                  <input type="text" class="form-control" id="kodeKategoriEdit"  name = "kodeKategoriEdit" placeholder="Kode Kategori" readonly>
                  </div>
                    <label for="namaSuplier" class="col-sm-4 control-label">Nama Kategori Barang</label>
                     <div class="col-sm-8">
                              <input type="text" class="form-control" id="namaKategoriEdit" placeholder="namaKategori" name ="namaKategoriEdit">
                            </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


