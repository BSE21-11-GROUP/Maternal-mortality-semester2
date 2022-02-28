<?php
 

 $marks = array("pain","stomach","apetite", "meet");

 $store=array();

 $data=array();
  // Declaration of strings
  $name1 = "geeks yop yo";
  $name2 = "geeks yo yop ";
 
  // Use strcmp() function
  if (strcmp($name1, $name2) !== 0) {
      echo 'Both strings are not equal';
  }
  else {
      echo 'Both strings are equal';
  }

  //$string = "hijdeafgbc";
 
//convert string to array
//$str_arr = str_split($string);
 
//sort into alphabetical order using sort() php function
//sort($str_arr);
 
//convert array to string again
//print implode($str_arr);


//;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

$look ="pain";


  if (in_array($look, $marks))
  {
   // echo "found";
  }
  else
  {
    //echo "not found";
  }



    $arr = array("Welcome","to", "GeeksforGeeks", 
    "A", "Computer","Science","Portal");  
    
// Converting array elements into
// strings using implode function
//echo implode($arr);


$str = "stomac world. It's a meet day gjjfg pain dfffj cvjfjj.";

$da = explode(" ",$str);


//$len =count($da);

foreach ($da as $value) {
  //echo "$value <br>";


  if (in_array($value, $marks))
  {
    
    array_push($store, $value);
  }
  else
  {
   // echo "no";
  }


  
}

$ssp =implode($store);
 
//echo $ssp;

//array_push($data, $ssp);

//echo $data[0];

$str_arr = str_split( $ssp);



 sort($str_arr);

echo implode($str_arr);

 //$str_arr ;



?>