<?php
$con= mysqli_connect('localhost','root','','dp_robot');
$motor1= $_POST['motor1'];
$motor2= $_POST['motor2'];
$motor3= $_POST['motor3'];
$motor4= $_POST['motor4'];
$motor5= $_POST['motor5'];
$motor6= $_POST['motor6'];
$sql="INSERT INTO control(motor1,motor2,motor3,motor4,motor5,motor6) VALUES ('$motor1','$motor2','$motor3','$motor4','$motor5','$motor6')";
if (!mysqli_query($con, $sql)){
echo 'Data has not saved';}
else
{ echo 'Data is saved successfully';}
?>