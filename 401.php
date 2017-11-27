
    <?php require("_root/common_linker.php");?>
<?php require("content/preprocessing.php"); ?>

<?php 
$strFolder = "Error";
$strPage = "404 Error Page";
$strPageDesc = "";

//
// Objects
//
$admin = new admin();

$companyNames = $admin->getCompanyIdNameMap();

$id = $_GET['userId'];

//
// POST
//




//
// GET
//


// end manage company






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
        <?php echo $strPage." ".$strPageDesc; ?>
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
  <section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow"> 401</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Unauthorized attempt.</h3>

          <p>
            We could not find the page you were looking for.
            Meanwhile, you may <a href="/dashboard.php">return to dashboard</a>.



          </p>


        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
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
<!-- no mess javascript --> 
<!-- may insert custom javascript below --> 

</body>
</html>