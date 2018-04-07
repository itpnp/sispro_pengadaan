<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
        </div>
        <!-- <div class="pull-left info">
          <p>John Doe</p>
        </div> -->
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> 
            <span>SUPLIER</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('admin/SupplierController/supplierHomePage'); ?>"><i class="fa fa-circle-o"></i> VIEW DATA</a></li>
            <li><a href="<?php echo site_url('admin/SupplierController/supplierAddPage'); ?>"><i class="fa fa-circle-o"></i> TAMBAH SUPPLIER</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> 
			<span>BARANG</span>
			  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		    <ul class="treeview-menu">
             <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> KATEGORI BARANG
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('admin/KategoriBarangController/kategoriHomePage'); ?>"><i class="fa fa-circle-o"></i> VIEW DATA</a></li>
				 
			  </ul><!--level2--> 	
			</li><!-- /.kategori barang -->
           <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i>SUB KATEGORI BARANG
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> VIEW DATA</a></li>
				 <li><a href="#"><i class="fa fa-circle-o"></i> TAMBAH SUB KATEGORI</a></li>
			  </ul><!--level2--> 	
			</li><!-- /.kategori barang -->
			<li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> DETAIL BARANG
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> VIEW DATA</a></li>
				 <li><a href="#"><i class="fa fa-circle-o"></i> TAMBAH DETAIL </a></li>
			  </ul><!--level2--> 	
			</li><!-- /.kategori barang -->
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>