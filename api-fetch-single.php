<?php
header('Content-Type:application/json');
header('Acess-Control-Allow-Origin: *');
//copy("api-fetch-all.php","api-fetch-single.php");
$data=json_decode(file_get_contents("php://input"),true);
$student_id=$data['sid'];

$con=mysqli_connect("localhost","root","","ajax_db") or die("unable to connect".mysqli_connect_error());
$query=mysqli_query($con,"select * from ajax_tbl where id ='$student_id'") or die("somthing_error".mysqli_error($con));
if(mysqli_num_rows($query)> 0){
	
	
$data=mysqli_fetch_all($query,MYSQLI_ASSOC);


$json_data=json_encode($data,JSON_PRETTY_PRINT );
echo $json_data;


}else{
	
	
	echo json_encode(array('message'=>'no record found','status'=>false));
}
//echo $data;
?>