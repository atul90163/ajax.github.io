<?php
$conn=mysqli_connect('localhost','root','','ajax_db') or die("unable to connect".mysqli_connect_error());
$sql=mysqli_query($conn,"select * from ajax_tbl");
$sqlnum=mysqli_num_rows($sql);
if($sqlnum > 0){
	
	//echo "<div class='alert alert-info'>data found </div>";
	while($data=mysqli_fetch_assoc($sql)){
	?>
	
      <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['email']; ?></td>
       <td><a href="update.php? id=<?php echo $data['id']; ?>" class="btn btn-primary" >Update</a>|<button class="btn btn-info dlt" id="<?php echo $data['id']; ?>" >Delete</button>
      
	  </tr>
      
<?php
}	
}else{
	//echo "<div class='alert alert-info'>data not  found </div>";
	?>
	<tr>
	<td colspan="3"> <center><h4>no data found</h4></center></td>
	</tr>
	
	<?php
	
	
}


?>
<script>
$(document).ready(function(){
$(".dlt").click(function(){

var delid = $(this).attr("id");

$.ajax({
method:"GET",
url:"delete.php",

data:{id:delid},
success:function(data){

$("#msg3").html(data);
}

});

//alert(delid);
});

});
</script>
 