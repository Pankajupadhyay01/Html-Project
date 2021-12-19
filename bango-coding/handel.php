<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	include'db.php';
	$user_name=$_POST['username'];
	$email_name=$_POST['signupEmail'];
	$pass=$_POST['signupPassword'];
	$cpass=$_POST['signupcPassword'];
//check wether email exit or not
$existSql="select * from bango where signupemail='$email_name' ";
$result=mysqli_query($conn,$existSql);
$numRows=mysqli_num_rows($result);
if($numRows>0){
	$showError="Email is already in use ";
	   
	}
else{
	if($pass==$cpass){
		$hash=password_hash($pass,PASSWORD_DEFAULT);
		$sql="INSERT INTO  `bango` ( `signupname`, `signupemail`, `signupass`, `timestampo`) VALUES ('$user_name', '$email_name', '$hash',   CURRENT_TIMESTAMP())";
	     $result=mysqli_query($conn,$sql);
		  
		 
		 if ($result){
			 $showAlert=true;
			 header("Location: main.php?signupsuccess=true"); 
			                 exit();

 		 }
	}
	else{
		$showError="password not match";
		 
	}
}
     header("Location: main.php?signupsuccess=false&error=$showError");

 }


 
?>