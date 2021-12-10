  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU</li>
        <li>
          <a href="<?=site_url('dashboard');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-info"></i> <span>Information</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('informasi/visimisi');?>"><i class="fa fa-circle-o text-blue"></i> Visi & Misi</a></li>
            <li><a href="<?=site_url('informasi/struktur');?>"><i class="fa fa-circle-o text-green"></i> Struktur Organisasi</a></li>
            <li><a href="<?=site_url('informasi/profile');?>"><i class="fa fa-circle-o text-red"></i> Profile Kepala Dinas</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Asset</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('software');?>"><i class="fa fa-circle-o text-blue"></i> SOFTWARE</a></li>
            <li><a href="<?=site_url('hardware');?>"><i class="fa fa-circle-o text-red"></i> HARDWARE</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-address-card"></i> <span>About</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>