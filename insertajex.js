
$(document).ready(function(){
function insert(){  
$("#submit").click(function(e){
e.preventDefault();
//alert("hii");
var name=$("#name").val();
var email=$("#email").val();

if(name==''){
$("#msg").html("<div class='alert alert-info'> please enter your name </div>");
return false;

}
if(email==''){
$("#msg").html("<div class='alert alert-info'> please enter your email </div>");
return false;

}

//alert(email);
//$("#msg").html("<div class='alert alert-info'>  email </div>");
//$("#msg").html(email);

$.ajax({
	type:"POST",
	url:"insert.php",
	 data:{name:name,email:email},
	 success:function(data)
	 {
		 $("#msg").html(data);
	 }	 
	
});
});
}
insert();

$.ajax({
url:"viewdata.php",
success:function(data){

$("#msg2").html(data)
}


});



});

