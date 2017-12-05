<?php require("_root/common_linker.php");?>
<?php require("content/preprocessing.php"); ?>
<?php require("content/Router_validation.php"); ?>
<?php 


//POST


use MikrotikAPI\Commands\Interfaces\Interfaces;

//GET


// indiviudual function call here 

// FUNCTIONS 

$Interfaces = new Interfaces($talker);





$eth= $Interfaces->ethernet()->getAll();



//$listIP = $ipaddr->getAll();


//MikrotikAPI\Util\DebugDumper::dump($eth,false);

?>


<?php 
$strFolder = "Interfaces";
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
      <?php  echo $strFolder;?>
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
          <h3 class="box-title"><?php  echo $strFolder;?></h3>
          
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
    <div class="box-body">

              <table id="example2" class="table table-bordered table-hover small">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Mac</th>
                  <th>Last Up Time</th>
                  <th>Tx</th>
                  <th>Rx</th>
      
                </tr>
                </thead>
                <tbody>
                 <?php foreach ($eth as $singleItem): ?>
                 <tr>
                
                  <td><?php echo $singleItem[".id"]; ?></td>
                  <td><?php echo checkifnull($singleItem["name"]);?></td>
                  <td><?php echo checkifnull($singleItem["type"]);?></td>
                    <td><?php echo checkifnull($singleItem["mac-address"]);?></td>
                   <td><?php echo checkifnull($singleItem["last-link-up-time"]);?></td>
                     <td><?php echo checkifnull($singleItem["last-link-up-time"]);?></td>
                     <td><?php echo checkifnull($singleItem["tx-byte"]);?></td>
                     <td><?php echo checkifnull($singleItem["rx-byte"]);?></td>




  <?php /* <td><?php echo drawBadge($gname_userStatus[$singleItem["status"]], $gname_userStatusColor[$singleItem["status"]]);?></td> */ ?>
           
                  </tr>
               <?php endforeach; ?>
                </tbody>

                <tfoot>
                  
                </tfoot>
                </table>
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