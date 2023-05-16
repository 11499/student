<!DOCTYPE html>
<html lang="en">
<?php
$con = mysqli_connect('localhost','root','','student');
   session_start();
   $id=$_SESSION['sessid'] ;
  echo $id;
   $sql="select * from login join sregister on login.lid=sregister.lid where login.lid='$id'";

   $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($result);
   $tid=$row['sid'];
   //echo $tid;
   //echo "welcome".$row['uname'];

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #6661e8;
 
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #060318;
}
header img{
  width: 35px;
  height: 35px;

}
header{
    background-color: #4e1818;
}
header img{
  width: 35px;
  height: 35px;
}

header{
    text-transform: capitalize;
    text-size-adjust: 35px;
    text-decoration: aliceblue;
}
p{
    font-size: x-large;
    align-content: center;
    text-align: justify;
    font-style: italic;
    
}
div{
    background-color: #e6edf7;
}
div p{
    margin-left: 50px;
}
dl{
    font-size:large;
    align-content: center;
    text-align: justify;
    font-style: italic;
}
footer{
    background-color: #6661e8;
    color: white;
    
}
  </style>
</head>
<body>
    <header><img src="logo.png" alt="" class="rounded"><p STYLE="color: #e6edf7;">STUDENT MANAGEMENT</p> </header>
    <nav>
<ul>
<li><a class="active" href="studenthome.php">Home</a></li>
<li><a href="stprofile.php">Profile</a></li>
<li><a href="viewnotes.php">Notes</a></li>

  <li><a href="logout.php">logout</a></li>

</ul>
</nav>
<div>
  
<center>
    <b>profile</b><BR></BR><fieldset><table><form action="" method="POST">
    <tr>
        <td><label>Name</label></td>
  <td>  <input type="text" name="name" id="name" value="<?php echo $row['name'];?>"><br><br></td>

</tr>
        
   <tr>
        <td><label>user Name</label></td>
  <td>  <input type="text" name="uname" id="uname" value="<?php echo $row['username'];?>"><br><br></td>

</tr>
<tr>
<td><label>class</label></td>
<td>  <input type="text" name="cl" id="cl" value="<?php echo $row['class'];?>"><br><br></td>

</tr>


<tr>
        <td><label>division</label></td>
  <td>  <input type="text" name="dv" id="dv" value="<?php echo $row['division'];?>"><br><br></td>

</tr>  
<tr>
        <td><label>rollno</label></td>
  <td>  <input type="text" name="rno" id="rno" value="<?php echo $row['rollno'];?>"><br><br></td>

</tr>             
<tr>
<td><label>password</label></td>
<td>  <input type="text" name="pass" id="pass" value="<?php echo $row['passwd'];?>"><br><br></td>

</tr>



<tr></tr><tr></tr><tr></tr>
      <tr> <td></td>
    <td>   <input type="submit" name="edit" value="edit">
   
</tr>
</form></table></fieldset><center></div><br><br>

 
</body>


<?php
if(isset($_POST['edit'])){
    $name=$_POST['name'];
    $uname=$_POST['uname'];
    $cl=$_POST['cl'];
    $dv=$_POST['dv'];
   
    $rno=$_POST['rno'];
$passwd=$_POST['pass'];

$sql2="update sregister set name='$name',class='$cl',division='$dv',rollno='$rno' where sid='$tid'";
//echo $sql2;
mysqli_query($con,$sql2);
$sql2="update login set uname='$uname',passwd='$passwd' where lid='$id'";
//echo $sql2;
mysqli_query($con,$sql2);
header('location:/student/studenthome.php');
}
?>
</body>
</html>