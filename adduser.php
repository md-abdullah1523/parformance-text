
<?php

$databaseHost='localhost';
$databaseName='test';
$databaseUsername='root';
$databasePassword='';
$cont=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if(!$cont){
	die("Connection failed: ".mysqli_connect_error());
}
else{
 echo"Connected Successfully";
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Library</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="adduser.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bookadd.php">Add book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bookdelete.php">Delete book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="borrow.php">Borrow book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="returnbook.php">Return Book</a>
                </li>
                
            </ul>
            <form class="form-inline my-2 my-lg-0"action="" method="post">
                <input class="form-control mr-sm-2" type="text" name ="bookdata" placeholder="">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search" >Search </button>
            </form>
        </div>
    </nav>
    <div class="container">
    

   <form action="" method="post">
   <div class="form-group">
    <label for="inputname">Name</label>
    <input type="text" class="form-control" name="Name">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control"  name="Email" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="pass">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="Add">
  </div>
  <div class="form-group">
    <label for="inputMobile">Mobile</label>
    <input type="text" class="form-control" id="inputAddress1" name="mobile">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Street</label>
      <input type="text" name="street" class="form-control">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">age</label>
      <input type="text" class="form-control" name="age" id="inputZip">
    </div>
  </div>
  
  <button type="submit"name="signup" class="btn btn-primary">Sign UP</button>
</form>

</div>
<?php

if(isset($_POST['signup'])){
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$mobile=$_POST['mobile'];
    $address=$_POST['Add'];
    $str=$_POST['street'];
    $city=$_POST['city'];
    $age=$_POST['age'];
	$pass=$_POST['pass'];
	if($name=="" || $email=="" || $mobile=="" || $address==""  || $str==""  || $city==""  || $age=="" || $pass==""){
		echo "All fields should be filled.Either one or many fields are empty.";
		}

	$inst="INSERT INTO tbl_user(name,email,mobile,address,street,city,age,pass) VALUES('$name','$email','$mobile','$address','$str','$city','$age','$pass')"; 
	$data=mysqli_query($cont,$inst);
	if($data == TRUE)
            {
                echo "<script>alert('successful..!');</script>";   
            }
	else{echo mysqli_error($cont);}
}
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>