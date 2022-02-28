<?php
include "connect.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);

 echo $uname;

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: manager.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <link href="style.css" rel="stylesheet" type="text/css">
	
    </head>
    <body>
	<br/><br/>
	<center>
	<div>



</div>
	<header><h1>MATERNAL ADVISORY SYSTEM</h1></header>
	 <img width="60%"  src="mother.png" ></center> 
	
    </body>
</html>

