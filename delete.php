<?php
//session_start();
//$au =$_POST["uname"];
//$ae =$_POST["uname"];
//echo $au."".$ae;
//$au =$_POST["name"];
//$ae=$_POST["email"];
//echo $au."  ".$ae;
$id=$_GET['id'];
//echo var_dump( $id);

$conn=mysqli_connect('localhost','root','','ajax_db') or die("unable to connect".mysqli_connect_error());

$sql=mysqli_query($conn,"delete from ajax_tbl where id=$id");
if($sql){
	 $error = "<div class='alert alert-info'>data deleted successfully</div>";
	 echo $error;
	
	//header('location:insert.html');
	//echo "<script>window.open('insert.html','_self');</script>";
	
}
else{
	$error = "<div class='alert alert-info'>data not deleted ! please try again</div>";
	echo $error;
	
	
}


?>