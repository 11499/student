<!DOCTYPE html>
<html lang="en">
<?php

$con=mysqli_connect("localhost","root","","student");
$sql="select * from sregister join login on sregister.lid=login.lid";
$result=mysqli_query($con,$sql);
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
<li><a class="active" href="teacherhome.php">Home</a></li>
<li><a href="profile.php">Profile</a></li>
<li><a href="notes.php">Notes</a></li>
<li><a href="vstud.php">students</a></li>
  <li><a href="logout.php">logout</a></li>

</ul>
</nav>
<div>

<table width="100%" border="2px">
<tr>
    <th>NAME</th>
    
    <th>GENDER</th>
    <th>CLASS</th>
    <th>DIVISION</th>
    
    <th>ROLL NO</th>
 

    </tr>
    <tr>
        <?Php while($row=mysqli_fetch_array($result)){?><tr>
            <td><?php echo $row['name']?></td>
          
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['class']?></td>
            <td><?php echo $row['division']?></td>
            <td><?php echo $row['rollno']?></td>
          
           <?php
            }
            ?>
    </tr>

</table>

</div>
</body>
</html>