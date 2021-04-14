<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$massage=$_POST['massage'];

$servername="localhost:3306";
$username="root";
$password="root";
$dbname="foodholic";

$conn=new mysqli($servername,$username,$password,$dbname);


echo "Connected Successully";

$sqlquery="INSERT INTO contact_table (first_name,last_name,email,massage) VALUES ('$fname','$lname','$email','$massage')";

$conn->query($sqlquery);

?>