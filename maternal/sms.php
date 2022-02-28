<?php

  
   $senderPhone = $_POST['sender'];
   $messageText = $_POST['text'];
/* Sending a reply SMS. */
/* Setting the HTTP response content type and charset */
  header('Content-Type: text/plain; charset=utf-8');
/* Comment the next line out if you do not want to send a reply */
require_once("connect.php");


//$marks = array("pain","heart", "stomach","breasts","breast","fever", "having", "have", "vomiting","nausea","feeling","want","headache","bleeding","swollen", "feel", "add");

$marks = array("constipation","heartburn","constipation","add",
"insomnia","headache","pressure","blood","swelling","fatigue","energy","itching");

//$rr ="achimostt";
$store=array();

$value2=array();

$confirm=array();


//$messageText ="i have hearttyyyh";

$messageText3 = strtolower($messageText);

$messageText2 = $messageText3." "."add";


$sms =$messageText2;



$da = explode(" ",$sms);

foreach ($da as $value) {
   
  if (in_array($value, $marks))
  {
    
    array_push($store, $value);
  }
  
}


$out = implode($store);

//array_push($store, $sms);

//echo "yes".$out;

$str = str_replace(' ', '', $out);

//echo $str;

$str_arr = str_split( $str);

sort($str_arr);

$prob = implode($str_arr);

array_push($value2, $prob);
//echo $value2[0];

$data = array('problem'=>$value2[0]);

$set =file_put_contents('data.json', json_encode($data));

//echo $value[0];
//if($set){

  $data2 = file_get_contents('data.json');
  $data3 = json_decode($data2, true); 
  //echo $data3['problem'];
  $input= $data3['problem'];

  


  $sql = "SELECT * FROM solve WHERE soln2='".$value2[0]."'";

  $result = mysqli_query($conn, $sql);
  
  
  
    // output data of each row
    while($row =mysqli_fetch_assoc($result)) {
      echo $row["soln"];

      array_push($confirm, $row["soln"]);
    }
 

  
  
  mysqli_close($conn);

  


if (empty($confirm)) {
  // list is empty.
  echo"system is not understanding your problem so visit the nearest hospitals for further assistance ";
}
  
  //}
//echo $prob;
//echo"yes";
//sms($rr);
//echo "Take panadal ";

?>
