<?php

$con=mysqli_connect("localhost","root","","student");
//$id=$_GET['id'];
$lid=$_GET['lid'];
echo $lid;
//$sql="update tregister set approve='approved' where tid='$id'";
$sq2="update login set status='approved' where lid='$lid'";
//mysqli_query($con,$sql);
mysqli_query($con,$sq2);
header('location:/student/teacher.php');
?>
