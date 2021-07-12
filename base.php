<?php
$con= mysqli_connect('localhost','root','','base_control');
$RIGHT= $_POST['RIGHT'];
$LEFT= $_POST['LEFT'];
$FORWARD= $_POST['FORWARD'];
$BACKWARD= $_POST['BACKWARD'];
$STOP= $_POST['STOP'];
$sql="INSERT INTO control(RIGHT,LEFT,FORWARD,BACKWARD,STOP) VALUES ('$RIGHT','$LEFT','$FORWARD','$BACKWARD','$STOP')";
if (!mysqli_query($con, $sql)){
echo 'Data has not saved';}
else
{ echo 'Data is saved successfully';}
?>