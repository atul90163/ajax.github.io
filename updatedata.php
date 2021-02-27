<?php
$name=$_POST['name'];
$id=$_POST['id'];
$email=$_POST['email'];
$conn=mysqli_connect('localhost','root','','ajax_db') or die('unable to connect'.mysqli_connect_error());
$sql=mysqli_query($conn,"update ajax_tbl set name='$name' , email='$email' where id='$id'");
if($sql){
	
	
	 $error = "<div class=' alert alert-info  '>data deleted successfully</div>";
	 echo $error;
	
}else{
	
	
	 $error = "<div class='alert alert-info'>data not deleted successfully</div>";
	 echo $error;
	
}

//echo $name;
?>