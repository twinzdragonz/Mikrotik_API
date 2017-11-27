<?php require("_root/common_linker.php");?>
<?php require("content/preprocessing.php"); ?>

<?php 
$strFolder = "Dashboard";
$strPage = " ";
$strPageDesc = "";
?>

<!--  minimum requirement to start a page --> 

<?php require("content/html_header.php"); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <!-- Main Header -->
  <?php include("content/main_header.php"); ?>
  <!-- End Main Header -->

  <!-- Left side column. contains the logo and sidebar -->
   <?php include("content/sidebar_left.php"); ?>
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small></small>
      </h1>

    <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> <?php echo $strFolder?></a></li>
        <li class="active"><?php echo $strPage?></li>
        <?php if(strlen($strPageDesc)>0):?>
        <li class="active"><?php echo $strPageDesc?></li>
        <?php endif;?>
      </ol>   
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

   <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Hello</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">

        <?php // change this with graph and so on.. lel.. ?> 
      <?php
      /* This sets the $time variable to the current hour in the 24 hour clock format */
      $time = date("H");
      /* Set the $timezone variable to become the current timezone */
      $timezone = date("e");
      /* If the time is less than 1200 hours, show good morning */
      if ($time < "12") {
          echo "Good morning"." ".$client["uUsername"]." what should we do today?";
      } else
      /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
      if ($time >= "12" && $time < "17") {
          echo "Good afternoon"." ".$client["uUsername"]." what should we do today?";
      } else
      /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
      if ($time >= "17" && $time < "19") {
          echo "Good evening"." ".$client["uUsername"]." what should we do today?";
      } else
      /* Finally, show good night if the time is greater than or equal to 1900 hours */
      if ($time >= "19") {
          echo "Good evening"." ".$client["uUsername"]." are u burning the midnight oil";
      }
      ?>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
    
        </div>
        <!-- /.box-footer-->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <!-- footer start -->
   <?php require("content/main_footer.php"); ?>
   <!-- footer end --> 

  <!-- Control sub_Sidebar -->
  <?php require("content/sidebar_right.php"); ?>
  <!-- /.control-sub_ sidebar -->

</div> 
<!--  no mess javascript -->
    <?php require("content/java_script.php"); ?>
<!-- may insert custom javascript below --> 
</body>
</html>