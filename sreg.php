<!DOCTYPE html>
<html lang="en">
<?php
    $con=mysqli_connect("localhost","root","","student");
    
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
<li><a class="active" href="home.html">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="reg.php">Register</a></li> 
</ul>
</nav> <br>

  <div class="row">
    <div class="col-sm-6" style="background-color: #e6edf7;">
    <img src="login2.jfif" alt="" width="70%">
    </div>
    <div class="col-md-6" style="background-color: #e7e4f6;">
    <center><h2>..Register..</h2> <br><br>
      <form action="" method="POST">
        <div class="form-group">
       
          <input type="text" class="form-control" placeholder="Enter your name" id="name" name="name" >
        </div>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter your username" name="uname" id="uname" >
        </div>
        <div class="form-group">
          <input type="number" class="form-control" placeholder="Enter your class" name="cl" id="cl">
        </div>
        <div class="form-group">
       
            <input type="text" class="form-control" placeholder="Enter  division" name="dv" id="dv" >
          </div>
          <div class="form-group">
           
            <input type="text" class="form-control" placeholder="Enter your Roll number" name="rno" id="rno">
          </div>
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your Gender" readonly>
          </div>
          <div class="form-group">
          <input type="radio" name="gender"  name="male" value="male">male
           </div>
           <div class="form-group">
          <input type="radio" name="gender"   name="female" value="female">female
           </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd" >
          </div>
          <div class="form-group">
           
            <input type="password" class="form-control" placeholder="confirm password" id="pwd"name="pwd">
          </div>
       
         
          <input type="submit"  class="btn btn-danger" value="register" name="submit" align="right">
      </form>
    </center>
    </div>
  </div>
  <br>

<footer><p>silja c k <br>
  siljavijayan99@gmail.com <br>
  9876543212
</p></footer>
</body>

<?php 
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $uname=$_POST['uname'];
  $cl=$_POST['cl'];
  $dv=$_POST['dv'];
  $pass=$_POST['pwd'];
  $rno=$_POST['rno'];
  $gender=$_POST['gender'];
$sql1="insert into login(username,passwd,usertype,status) values('$uname','$pass','student',approved)";
mysqli_query($con,$sql1);
  $result1=mysqli_query($con,"select * from login where username='$uname'");
 $row=mysqli_fetch_assoc($result1);
  
$sql2="insert into sregister(lid,name,class,division,rollno,gender) values('$row[lid]','$name','$cl','$dv','$rno','$gender')";
mysqli_query($con,$sql2);

echo $sql2;
header('location:/student/login.php');
}?>

</html>