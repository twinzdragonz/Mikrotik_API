<header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><?php echo $web_short; ?></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo $Web_Name; ?></b><?php echo $Web_sec_Name;?></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- Messages: style can be found in dropdown.less-->
           <?php if($messaging == true) { include("content/messaging.php"); } ?>
          <!-- /.messages-menu -->
            <?php if($notification == true){ include("content/notification.php"); }?>
          <!-- Tasks Menu -->
           <?php if($task == true){ include("content/task.php"); }?>
       

          <!-- User Account Menu -->
           <?php require("content/perso_tab.php"); ?>
          <!-- Control Sidebar Toggle Button -->
            <?php if ($strFolder == "Database" || $strFolder == "Reports") {?>
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>

          <?php }else {}?>


        </ul>
      </div>
    </nav>
  </header>