<?php 

	include_once 'db.php';

if (isset($_POST['insert'])) {
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$insert_query = "insert into register(name,email,password)values('$name','$email','$password')";
	mysqli_query($con,$insert_query);	
}






$sql_select = "select * from register";
$data = mysqli_query($con,$sql_select);


 ?>