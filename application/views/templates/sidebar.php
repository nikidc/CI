
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/foto_profil/').$user['foto_profil'] ?>" class="img-circle elevation-2">
        </div>
        <div class="pull-left info">
          <p><?= strtoupper($user['nama_l']); ?></p><br>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Terverifikasi <?php if($user['verifikasi_user'] == "FALSE"){ ?>
          <i class="fa fa-times"></i>
          <?php echo anchor('rumah/unggahktp/'.$user['id_l'],'<div class="btn btn-sm"><i class="fa fa-check">Klik untuk verifikasi</i></div>') ?>
          <!-- <a href="<?php echo base_url();?>rumah/unggahktp">Klik untuk verifikasi</a>  -->
          <?php }else { ?>
            <i class="fa fa-check"></i>
             <?php } ?>
          </li>
        <!-- Query Menu -->
        <?php 
        // print_r($user);die;
        $role_id = $this->session->userdata('csRole');
        $queryMenu = "SELECT *
                        FROM `user_menu` JOIN `user_access_menu` 
                         ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                       WHERE `user_access_menu`.`role_l` = '$role_id'
                      ORDER BY `user_access_menu`.`menu_id` ASC
                       ";

                       $menu = $this->db->query($queryMenu)->result_array();
        ?>
        <!-- Looping Menu -->
        <?php foreach ($menu as $m) : 
          if($m['is_active'] == 1) {?>
        <li class="nav-link">
          <a href="<?php echo base_url($m['url']); ?>">
            <i class="<?php echo $m['icon']; ?>"></i> 
            <span><?php echo $m['title']; ?></span>
          </a>
        </li>


          <?php } endforeach; ?>  

        <!-- <li class="nav-link">
          <a href="<?php echo base_url(); ?>rumah/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-link">
          <a href="<?php echo base_url(); ?>rumah/rumah">
            <i class="fa fa-home"></i> <span>Rumah</span>        
          </a>        
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-inbox"></i> <span>Inbox</span>          
          </a>         
        </li>
        <li class="nav-link">
          <a href="<?php echo base_url(); ?>rumah/setting">
            <i class="fa fa-gear"></i> <span>Setting</span>           
          </a>
        </li> -->
        <li class="nav-link">
          <a href="<?php echo base_url(); ?>login/logout">
            <i class="fa fa-sign-out"></i> <span>Logout</span>           
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>