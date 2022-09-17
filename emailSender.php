<?php 
if(isset($_POST['submit'])){ 
 
	$to = $_POST['name']; 
	$subject = $_POST['subject']; 
	$txt = $_POST['message']; 
	$headers = "From: " . $_POST['email']";
	mail($to,$subject,$txt,$headers); 
} 

?> 