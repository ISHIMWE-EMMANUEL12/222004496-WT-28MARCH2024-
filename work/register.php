<?php
$connection = new mysqli("localhost","root","","mytest");
if($connection->connect_error){
	die("connection failed: ".$connection->connect_error);
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
 $email = $_POST['email'];
 $password =password_hash($_POST['password'], PASSWORD_DEFAULT);
 $sql ="INSERT INTO user (email,password) values ('$email','$password');
 if($connection->query($sql)==TRUE){
 echo "Registration successiful!";
 }else{
 	echo "Error: ".$sql."<br> .$connection->error;
 	 }
 	}$connection->close();
?>