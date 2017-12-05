<?php // calling this function  
// EXAMPLE : echoActiveClassIfRequestMatches("PAGE HERE ");
//navigate which page is requested and turn it active 

?>

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <?php goto SKIP1;?>
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">

         <img src="<?php echo get_gravatar("azfarazman95@gmail.com");?>" class="img-circle" alt="User Image">
          <!--<img src="dist/img/avatar.jpg" class="img-circle" alt="User Image"> -->

        </div>
        <div class="pull-left info">
          <p><?php echo $client["uUsername"]; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
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
      <?php SKIP1: ?>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Main Menu</li>
        <!-- Optionally, you can add icons to the links -->


    <li class="<?php if ($strFolder == "Dashboard")echo "active";?>">
        <a href="/dashboard.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
          </li>

              <li class="<?php if ($strFolder == "Interfaces")echo "active";?>">
        <a href="/interfaces.php"><i class="fa fa-microchip"></i><span>Interfaces</span></a>
          </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>