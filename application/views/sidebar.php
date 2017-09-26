<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->ion_auth->user()->row()->username; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if(isset($link_dashboard)){ echo $link_dashboard;}?>>
          <a href="<?php echo base_url()?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="header">USERS MANAGEMENT</li>
        <li <?php if(isset($link_users)){ echo $link_users;}?>><a href="<?php echo base_url()?>auth"><i class="fa fa-users text-red"></i> <span>Users</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  