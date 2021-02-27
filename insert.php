<?php
//$au =$_POST["uname"];
//$ae =$_POST["uname"];
//echo $au."".$ae;
$conn=mysqli_connect('localhost','root','','ajax_db') or die("unable to connect".mysqli_connect_error());
$au =$_POST["name"];
$ae=$_POST["email"];
//echo $au."  ".$ae;
$sql=mysqli_query($conn,"insert into ajax_tbl(name,email)values('$au','$ae')");
if($sql){
	echo "<div class='alert alert-info'>data inserted successfully</div>";
	
}
else{
	echo "<div class='alert alert-info'>data not inserted ! please try again</div>";
	
	
}
?>
