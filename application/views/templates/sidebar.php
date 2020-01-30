<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>templates/dist/img/photo2.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Yeni Rahmayati</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url()?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Master</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">7</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url()?>/daftar_jenis"><i class="fa fa-circle-o"></i> Daftar Jenis</a></li>
            <li><a href="<?php echo site_url()?>/daftar_kondisi"><i class="fa fa-circle-o"></i>Daftar Kondisi</a></li>
            <li><a href="<?php echo site_url()?>/daftar_ruang"><i class="fa fa-circle-o"></i>Daftar Ruang</a></li>
            <li><a href="<?php echo site_url()?>/daftar_satuan"><i class="fa fa-circle-o"></i>Daftar Satuan</a></li>
            <li><a href="<?php echo site_url()?>/daftar_sumber"><i class="fa fa-circle-o"></i>Daftar Sumber</a></li>
            <li><a href="<?php echo site_url()?>/daftar_tahun"><i class="fa fa-circle-o"></i>Daftar Tahun</a></li>
            <hr>
            <li><a href="<?php echo site_url()?>/data_inventaris"><i class="fa fa-circle-o"></i>Data Inventaris</a></li>

          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>