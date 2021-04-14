<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$adress=$_POST['adress'];
$nperson=$_POST['nperson'];
$date=$_POST['date'];
$timing=$_POST['timing'];
$tableno=$_POST['tableno'];

$servername="localhost:3306";
$username="root";
$password="root";
$dbname="foodholic";

$conn=new mysqli($servername,$username,$password,$dbname);

echo "Connected Successully";

$sqlquery="INSERT INTO registration_table (first_name,last_name,email,number_of_person,visit_time,visit_date,table_number) VALUES ('fname','lname','email','adress','nperson','date','timing','tableno')";

$conn->query($sqlquery);

?>