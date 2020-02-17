<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$msg=$_POST['msg'];
	
	$conn = new mysqli('localhost','root','','feedback');
	if($conn->connect_error){
		die('connnection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into feedback(name, email, phone, msg)
		value(?,?,?,?)");
		$stmt->bind_param("ssis",$name,$email,$phone,$msg);
		$stmt->execute();
		echo"thank you for feedback.....";
		$stmt->close();
		$conn->close();
	}
	
?>