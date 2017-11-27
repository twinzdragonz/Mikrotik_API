<?php

function hextoasctii($hex)
{
	$str = '';
    for($i=0; $i<strlen($hex);$i+=2) $str .= chr(hexdec(substr($hex,$i,2)));
    return $str;
}

  function ebcdic_to_ascii($ebcdic_hexstring /*expecting something like F0F1....*/)
  {
  
    // loop until there is no more conversion.
    $asciiOut = "";    
    while(strlen($ebcdic_hexstring)>1)//F0F1F2F3F -> F1F2F3F
    {
        $thisEbcdic = substr($ebcdic_hexstring, 0, 2);//F0->F1
        //if(!is_null($ebcd_ascii[$thisEbcdic]))
        $asciiOut = $asciiOut.$ebcd_ascii[$thisEbcdic];//0->01
        $ebcdic_hexstring = substr($ebcdic_hexstring, 2);//F1F2F3F -> F2F3F
    }    
    
    return $asciiOut;

  }

// remove all escape character 
  function clean($string) 
  {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
  }


function startsWith($haystack, $needle)
{
     $length = strlen($needle);
     return (substr($haystack, 0, $length) === $needle);
}

 function highestValue($ar3) {
       foreach($ar3 as $key => $value) {
           if (is_array($value)) {
               $ar3[$key] = highestValue($value);
           }
       }

         return max($ar3);
   }














?>