<?php
$path = dirname(__FILE__);
include($path."/config.inc.php");
include($path."/constants.inc.php");

// if DB exist link it here 


// external lib
include($path."/common_functions.php");
include($path."/web_functions.php");

//
// INSERT CUSTOM LIB HERE 
//
// MIKROTIK API 
include($path."/vendor/autoload.php");
// END OF MIKROTIK API
// 




// web settings // later get from database 

$messaging = false;
$notification = false;
$task = false;

//$gravatar = true; {soon};

// this is where we include all the root function into one. 
// 

/*
	include($path."/config.inc.php");
    include($path."/isoconfig.inc.php");
	include($path."/users.obj.php");
    include($path."/iso.obj.php");
 */

 // common setting 



// include external functions







?>