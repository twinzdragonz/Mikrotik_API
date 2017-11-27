<?php require("_root/common_linker.php");?>
<?php require("content/preprocessing.php"); ?>

<?php 



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
        Page Header
        <small>Optional description</small>
      </h1>


      <?php //Note: i turn off this breadcrumb. ?>
      <!--  
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>  -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

     <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          Start creating your amazing application!
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
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
<!-- no mess javascript --> 
<!-- may insert custom javascript below --> 

</body>
</html>