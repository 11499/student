<!DOCTYPE html>
<html lang="en">
<?php
    $con=mysqli_connect("localhost","root","","student");
    session_start();
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
 
  

 
</ul>
</nav> <br>

  <div class="row">
    <div class="col-sm-6" style="background-color: #e6edf7;">
    <img src="login2.jfif" alt="" width="70%">
    </div>
    <div class="col-md-6" style="background-color: #e7e4f6;">
    <center><h2>LOGIN</h2> <br><br>
      <form action="" method="post">
        <div class="form-group">
       
          <input type="text" class="form-control" placeholder="Enter your username" name="name" id="name" >
        </div>
            <input type="password" class="form-control" placeholder="Enter password" name="pass" id="pass" >
           <br>
            <input type="submit"  class="btn btn-primary" value="login" name="submit" align="right">
           
        </div>
          </div>
          </div>
      </form>
    </center>
    </div>
  </div>

<footer><p>silja c k <br>
  siljavijayan99@gmail.com <br>
  9876543212

</p></footer>
</body>
<?php
if(isset($_POST['submit'])){
$pass=$_POST['pass'];
$name=$_POST['name'];
$sql="select * from login where username='$name' and passwd='$pass' and status='approved'";
echo $sql;
$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result)>0) {
		$row = mysqli_fetch_array($result);
			$_SESSION['sessid'] = $row['lid'];
			if ($row['usertype']=="admin") {
			?>	
				<script type="text/Javascript">
					window.location.href="/student/adminhome.php"</script>
			<?php
			} else if ($row['usertype']=="student") {

			?>
				<script type="text/Javascript">
					window.location.href="/student/studenthome.php"</script>
				
						<?php
			} 
			else if ($row['usertype']=="teacher") {

                ?>
                    <script type="text/Javascript">
                        window.location.href="/student/teacherhome.php"</script>
                    
                            <?php
                } 
                
       			
			else {
				
				echo "Invalid Username and Password";
			}
		}
  }


?>




</html>