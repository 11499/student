<?php

$con=mysqli_connect("localhost","root","","student");
$id=$_GET['id'];

$sq2="update notes set status='declined' where id='$id'";

mysqli_query($con,$sq2);
header('location:/student/apnote.php');
?>