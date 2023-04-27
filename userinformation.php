<?php
//creating a connection
$con = mysqli_connect('localhost','root','','website_data');

mysqli_select_db($con, "website_data");

$user = $_POST['user'];
$email = $_POST['email'];
$message=$_POST['message'];

$query = "INSERT INTO userinfodata (user, email,message) VALUES('$user','$email','$message');";

//inserts the form data into the database
mysqli_query($con, $query);

//displays a message of the success of the application
echo "MESSAGE WAS SENT!";
?>