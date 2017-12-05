<?php


 function common_error_message()
  {
     return  bootstrap_alert(4,"System Error! ","Unexpected problem happen ");
  } 

  function bootstrap_alert($alert,$text_title,$text_contain)
  {
  // declare  http popup modal
  //  \" echo escape char for php 
  // id must not be specia character.since use clean function
    
          $id = "\"#popupModal\"";
          // danger is default 
          if($alert == 1){
          $alert_txt = "'alert alert-success'"; }
          elseif ($alert == 2) {
          $alert_txt = "'alert alert-info'";}
          elseif ($alert == 3) {
          $alert_txt = "'alert alert-warning'";}
          else { $alert_txt = "'alert alert-danger'"; }

          // build javascript
          $Java_snippet = "<script type=text/javascript>
                setTimeout(function() {
                    $($id).fadeOut('fast');
                    }, 5000);
                 </script>";

          $html_id_build = clean($id);

          // build bootstrap html 
          $popup_builder = "<div class=$alert_txt id=$html_id_build><strong>$text_title</strong> $text_contain</div>";

          // concanate html and javascript 
          $init = $popup_builder.$Java_snippet;
          return  $init;
  }

  // active class function
 // determine to give class active or not on current page
function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo "active";
}
  // gravatar  api 
  /**
 * Get either a Gravatar URL or complete image tag for a specified email address.
 *
 * @param string $email The email address
 * @param string $s Size in pixels, defaults to 80px [ 1 - 2048 ]
 * @param string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
 * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
 * @param boole $img True to return a complete IMG tag False for just the URL
 * @param array $atts Optional, additional key/value attributes to include in the IMG tag
 * @return String containing either just a URL or a complete image tag
 * @source https://gravatar.com/site/implement/images/php/
 */

function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
    $url = 'https://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
    if ( $img ) {
        $url = '<img src="' . $url . '"';
        foreach ( $atts as $key => $val )
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
    return $url;
}


function trim_input($data) {

  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}

function checkifnull($data,$datareplace = "n/a")
{
  if($data === null) { $data = $datareplace; }
  return $data;
}


function padZero($number)
{
  return sprintf("%05d", $number);
}





function generateToken($vector, $id)
{
  $checkSum = crc32("Mikrotik_API".$vector.$id);
  return $checkSum;
}


function drawTableRow($title, $prefix, $data, $postfix, $option=null)
{
  $strHtml = "<tr>
                  <td width='100px'>$title</td>
                  <td>$prefix</td>
                  <td>$data</td>
                  <td>$postfix</td>
                </tr>";

                return $strHtml;
}

function drawTableRowInput($title, $prefix, $inputName, $data, $postfix, $option=null,$type=null)
{
  $inputOption;
  if(strpos($option, "-readonly-"))
  {
      $inputOption = "READONLY";
  }
  else
  {
    $option = $inputOption;
  }

  $strHtml = "<tr>
                  <td width='100px'>$title</td>
                  <td>$prefix</td>
                  <td><input class='form-control' name='$inputName' value='$data' type='$type' $inputOption ></td>
                  <td>$postfix</td>
                </tr>";

                return $strHtml;
}



function drawBadge_on_right($text, $color)
{
  $strHtml = "<span class='pull-right badge bg-$color'>$text</span>";

  return $strHtml;
}
function drawBadge_on_left($text, $color)
{
  $strHtml = "<span class='pull-left badge bg-$color'>$text</span>";

  return $strHtml;
}

function drawBadge($text, $color)
{
  $strHtml = "<span class=' badge bg-$color'>$text</span>";

  return $strHtml;
}

function drawOption($itemValue, $itemName, $selectedValue)
{
  $selected = "";
  if($selectedValue == $itemValue)
    $selected = "SELECTED";
     $strHtml = "<option value='$itemValue' $selected>$itemName</option>";

  return $strHtml;
}

function log_out():void
{
  // before out what to do?
  return;
}


// SYSTEM FUNCTIONS
function Ownership($UID, $reserve_field)
{
  if($UID == $reserve_field)
  {
    return true;
  }
  else
  {
    return false;
  }
}

function access_level($ID , $table)
{
  switch ($ID) {
    case 1:
        //code to be executed only for own access;
        break;
    case 3:
        //code to be executed only inside group;
        break;
    case 4:
         //code to be executed only for company;
         break;
    case 5 :
         //code to be executed on all;
         break;
    default:
        //code will not be executed since is 0;      
}}


function array_flatten($array) { 
  if (!is_array($array)) { 
    return FALSE; 
  } 
  $result = array(); 
  foreach ($array as $key => $value) { 
    if (is_array($value)) { 
      $result = array_merge($result, array_flatten($value)); 
    } 
    else { 
      $result[$key] = $value; 
    } 
  } 
  return $result; 
}

function getAccessName_Value_Set($array,$AccessName)
{
  $return_value = null;
  foreach ($array as $key => $value) {
      $return_value[] = $value[$AccessName];

  }
  return getAccess_Validation($return_value);

}

function getAccess_Validation($array)
 {
    if(count($array) === 1)
    {
      if(in_array(0,$array))
      { 
          return 0;
      }
    }
    elseif(count($array > 1))
    {
      return max($array);
    }
    else
    {
      return -1;
    }

    //  if only 1 array and its 0 return 0 
    // return max of accessLevel if more than 1 array 
    // return -1 if nothing in array
 }

 #Method to go to previous page
function goback()
{


     header("Location: 401.php");
     exit;
}


























?> 