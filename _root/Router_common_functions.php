
<?php 



function pingAddress($ip) 
{
    $pingresult = exec("/bin/ping -n 1 $ip", $outcome, $status);
    if (0 == $status) {
        $status = true;
    } else {
        $status = false;
    }

    return $status;
   
}






















?>
