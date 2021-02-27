<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <script type="text/javascript" src="jq/jquery.js"></script> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script type="text/javascript">
   $(document).ready(function(){
	   $("#btnn").click(function(){
		   
		  //alert('it is second lecture');
		 // console.log("second tutorials");
		 $.post(
		 "sdata.php", //php file
		 {
			 name:"atul",   // passed value in php file
			 age : 20
			 
		 },
		 function(data){  // return data from file
			 //alert(data)
			 $("#msg").html(data);
		 
		 });
	   });
	   
	   
   });
</script>

  
 </head>
<body>

<div class="container">
  <h1>second tutorials of ajax</h1>
 <button id="btnn" class="btn btn-primary">
click me</button> 
<div id="msg"> </div>
 </div>
</body>
</html>