<?php

require '../vendor/autoload.php';

use MikrotikAPI\Talker\Talker;
use \MikrotikAPI\Entity\Auth;
use MikrotikAPI\Commands\IP\Address;
use MikrotikAPI\Commands\System\System;
use MikrotikAPI\Commands\IP\Firewall\FirewallFilter;


$auth = new Auth();
$auth->setHost("192.168.88.1");
$auth->setUsername("admin");
$auth->setPassword("");
$auth->setDebug(true);




$talker = new Talker($auth);
//$filter = new FirewallFilter($talker);
//$a = $filter->getAll();



$ipaddr = new Address($talker);
$listIP = $ipaddr->getAll();


$detail = $ipaddr->detail_address("*1");


$Sys = new System($talker);


$iInfo = $Sys->get_all_routerboard();


//MikrotikAPI\Util\DebugDumper::dump($listIP);
var_dump($iInfo);

