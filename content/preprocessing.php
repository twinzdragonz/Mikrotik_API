<?php
// before anything happen 
session_start();


$talker = null;
$auth = null;



$sessionid = session_id();

// basic declare 
use MikrotikAPI\Talker\Talker;
use \MikrotikAPI\Entity\Auth;
use MikrotikAPI\Commands\IP\Address;
use MikrotikAPI\Commands\IP\Firewall\FirewallFilter;
//

$thisRouter_IP = null;
$thisRouter_Username = null;
$thisRouter_Password = null;

if(is_null($_SESSION['ipaddress']) || is_null($_SESSION['username']) )
{
  header("Location: login.php");
  exit;
}
else
{
	// if exist transfer session into object;
	$thisRouter_IP = $_SESSION['ipaddress'];
	$thisRouter_Username = $_SESSION['username'];
	$thisRouter_Password =  $_SESSION['password']; 

	$this_session_id = session_id();

	$Tokenizer = generateToken($thisRouter_IP.$thisRouter_Username.$thisRouter_Password,$this_session_id);


    // and if token fail to generate go back to login
	if($Tokenizer != $_SESSION['SSID'])
	{
         header("Location: Login.php");
         exit;
	}
	else
	{ 
		// else show the SSID;
          
		$ShowSSID = $Tokenizer;
        // http_build_query(array_merge($Tokenizer));

	}
    // $_SESSION['SSID'] = generateToken($_SESSION['ipaddress'].$_SESSION['username'].$_SESSION['password'],$this_session_id)
    //$_SESSION['SSID']
    
}

 ?>