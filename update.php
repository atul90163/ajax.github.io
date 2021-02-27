<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crud Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="insertajex.js"></script>
  <script>
  $(document).ready(function(){
	  
	  $("#update").click(function(event){
		  event.preventDefault();
		  var id = $("#id").val();
		  var name = $("#name").val();
		  var email = $("#email").val();
		 // alert(email);
		  
	/* by using post method of jquery	 // alert("hii");
		 $.post(
		 'updatedata.php' {name:atul},function(data){alert(data);}
		 
		 );
		*/

// by using ajax method

$.ajax({
	method:"POST",
	url:"updatedata.php",
	data:{id:id, name:name , email:email},
	success:function(data){
		
		
		$("#msg4").html(data);
		//alert(data)
	}
	
});
		
	  });
	  
	  
  });
  
  
  </script>
 <style>form{
	 
	 
	 margin:40px;
 }
 hr{
	 height:3px;
	 background:black
 }</style>
  
</head>
<body>

<div class="container" style=" ">
<h4>updation form</h4>
<hr>
  <div id="msg4" ></div> 
<?php
$id=$_GET['id'];
//echo $id;
  $conn=mysqli_connect('localhost','root','','ajax_db') or die("unable to connect".mysqli_connect_error());
  $sql=mysqli_query($conn,"select * from ajax_tbl where id ='$id'");
  if($sql){
	  while($row=mysqli_fetch_assoc($sql)){
	?>
	
	
		<form >
		<input type="hidden" id="id" name="id" value="<?php echo  $row['id'] ?>"  />
  <div class="form-group">
    <label for="name">Name</label>
    <input type="name" class="form-control" placeholder="Enter name" name="name" id="name" value="<?php echo $row['name']?>">
  </div>
  <div class="form-group">
    <label for="pwd">Email:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email" id="email" value="<?php echo $row['email']?>">
  </div>
  
 <button type="submit" class="btn btn-primary"  id="update">Update</button>

          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		  <a href="insert.html" class="btn btn-primary">Dashboard</a>
   
</form>

<?php	
}	  
	  
  }else{
	  
	  
	  echo "<div class='alert alert-info'>data not deleted ! please try again</div>";
	  
  }
 
?>
	</div>
</body>
</html>		
		