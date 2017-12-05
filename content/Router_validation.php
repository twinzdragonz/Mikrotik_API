<?php 


use MikrotikAPI\Talker\Talker;
use \MikrotikAPI\Entity\Auth;
use MikrotikAPI\Commands\IP\Address;
use MikrotikAPI\Commands\IP\Firewall\FirewallFilter;


if(is_null($thisRouter_IP) || is_null($thisRouter_Username) )
{
  
 header("Location: login.php");
  exit;
}


$auth = new Auth();
$auth->setHost($thisRouter_IP);
//$auth->setPort($_POST['port']);
$auth->setUsername($thisRouter_Username);
$auth->setPassword($thisRouter_Password);
$auth->setDebug(true);


$talker = new Talker($auth);

$ipaddr = new Address($talker);


?>