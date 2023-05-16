<?php

$con=mysqli_connect("localhost","root","","student");
$id=$_GET['id'];
$sql="delete from notes where id='$id'";
$result=mysqli_query($con,$sql);
header('location:/student/notes.php');
?>