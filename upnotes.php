<!DOCTYPE html>
<html lang="en">
    <?php
    $con=mysqli_connect("localhost","root","","student");
    $id=$_GET['id'];
    $sql="select * from notes where id='$id'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);

    
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
<div><center><form action="" method="post"  enctype='multipart/form-data'>
        <table>
<tr>
<td><label for="">Class</label></td>

    <td><input type="text" name="class" id="" value=<?php echo $row['class']?>></td>
  
</tr>
<tr>
<td><label for="">Subject</label></td>

    <td><input type="text" name="sub" id="" value=<?php echo $row['subjet']?>></td>
  
</tr>
<tr>

<td><label for="">Note</label></td><td>
<input type="file" name="img" value=""  ><a href="/student/file/<?php echo $row['note'];?>">note</a>
</td></tr>
<tr>
<td>
<input type="submit" name="submit" id="">
</td></tr>
        </tr></table>
    </form></center>


</body>
<?php
if(isset($_POST['submit'])){
    $class=$_POST['class'];
    $sub=$_POST['sub'];
    $img=basename($_FILES["img"]["name"]);
    $path="file/".$img;
    move_uploaded_file($_FILES["img"]["tmp_name"],$path);
    if ($img=="") {
        $sql="update notes set class='$class',subject='$sub' where id='$id'";
    }
    else
    {
        $path="file/".$img;
    move_uploaded_file($_FILES["img"]["tmp_name"],$path);
    $sql="update notes set class='$class',subjet='$sub',note='$img' where id='$id'";
    }
    mysqli_query($con,$sql);
    header('location:/student/notes.php');
}
?>


</body>
</html>