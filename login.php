<?php 


?>
<?php require("_root/common_linker.php");?>
<?php


use MikrotikAPI\Talker\Talker;
use \MikrotikAPI\Entity\Auth;
use MikrotikAPI\Commands\IP\Address;
use MikrotikAPI\Commands\IP\Firewall\FirewallFilter;


session_start();

$pop_up = false;


//
//POST
//

if(isset($_POST['ipaddress']) || isset($_POST['port']) || isset($_POST['username']) || isset($_POST['password']))
{
    if(is_null($_POST['ipaddress']))
    {
        $pop_up = true;
        $warning_level = 3;
        $error_title = "Whooops!";
        $error_message = " IP Address can't be empty!";
    }
/*
    if(is_null($_POST['port']))
    {
        $pop_up = true;
        $warning_level = 3;
        $error_title = "Whooops!";
        $error_message = " Port can't be empty!";
    }   */


    if(is_null($_POST['username']))
    {
        $pop_up = true;
        $warning_level = 3;
        $error_title = "Whooops!";
        $error_message = " Username can't be empty!";
    }

    if(is_null($_POST['password']))
    {
        $pop_up = true;
        $warning_level = 3;
        $error_title = "Whooops!";
        $error_message = " Password can't be empty!";
    }

$auth = new Auth();
$auth->setHost($_POST['ipaddress']);
//$auth->setPort($_POST['port']);
$auth->setUsername($_POST['username']);
$auth->setPassword($_POST['password']);
$auth->setDebug(true);

$talker = new Talker($auth);
//$filter = new FirewallFilter($talker);
//$a = $filter->getAll();
$ipaddr = new Address($talker);
$listIP = $ipaddr->getAll();
MikrotikAPI\Util\DebugDumper::dump($listIP);

}

//
//GET
//






//
//INTERNAL FUNCTIONS 
//

//$this->talker = new Talker($this->param['host'], $this->param['port'], $this->param['username'], $this->param['password']);
// host,port,username,password

?>


<?php require("content/html_header.php");?>

<body class="hold-transition login-page">
<div class="login-box">

  <div class="login-logo">
    <a href="../../index2.html"><b><?php echo $Web_Name; ?> </b><?php echo $Web_sec_Name; ?></a>
  </div>
  <!-- /.login-logo -->


  <div class="login-box-body">

    <p class="login-box-msg">Connect and start your session  </p>

    <form action="#" method="post">


               <div class="form-group">
               

 

        <div class="form-group has-feedback">
          <input class="ip_address form-control" placeholder="IP Address" type="text" id="ipaddress" name="ipaddress">
          <span class="fa fa-laptop form-control-feedback"></span>
        </div>


         <div class="form-group has-feedback">
          <input class="port form-control" placeholder="Port" type="text" id="port" name="port">
          <span class="fa fa-laptop form-control-feedback"></span>
        </div>



      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" id="username" name="username">
        <span class="fa fa-user form-control-feedback"></span>
      </div>


      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" id="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>



      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" value="Login">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   <!-- <a href="#">I forgot my password</a><br> -->
    
   <!-- <a href="register.html" class="text-center">Register a new membership</a> -->
  </div>
   <?php if($pop_up == true){ echo "<br>".bootstrap_alert($warning_level,$error_title,$error_message); } else { 
       } ?>
  <!-- /.login-box-body -->
</div>


<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>

<script type="text/javascript">
  //filtering ip address 
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', { translation: { 'Z': { pattern: /[0-9]/, optional: true } } });

  
</script>

<script type="text/javascript">
  // filtering port number 
  $('.port').mask('ZZZZZ',{translation:{'Z':{pattern:/[0-9]/,optional:false}}});
</script>

</body>
</html>
