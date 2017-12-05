<?php require("_root/common_linker.php");?>
<?php require("content/preprocessing.php"); ?>
<?php require("content/Router_validation.php"); ?>
<?php 

// indiviudual function call here 


?>


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
       <?php echo $strFolder; ?>
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

    <section class="content">
   <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-signal"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">IP address </span>
              <span class="info-box-number"><?php echo $thisRouter_IP; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div> 

          <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-eye"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Port</span>
              <span class="info-box-number"><?php echo "Private" ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div> 

            <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-orange"><i class="fa fa-connectdevelop"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"> Status </span>
              <span class="info-box-number"><?php echo "Connected" ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div> 


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