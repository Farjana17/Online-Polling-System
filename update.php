<?php
ob_start();
 include 'connection.php';

 if(isset($_POST['done'])){
//  $id_new= $_POST["id_new"];
 $name_new=$_POST["names"];
 $email_new=$_POST["email"];
 $pass_new=$_POST["password"];
 $age_new=$_POST["age"];
 $city_new=$_POST["city"];
 $country_new=$_POST["country"];
 

 $id = $_GET['ID'];

 
 $q = "UPDATE users SET Name='$name_new', Email='$email_new', Password='$pass_new', Age='$age_new', City='$city_new', Country='$country_new' WHERE id='$id'";

 $query = mysqli_query($con,$q);

 header('location:viewProfile.php');
 } 

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>
 <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="header">
       <a href="about.html">Online Polling</a>
       <div class="right-header">
   <nav id="link">
           <ul>
               <li><a class="active" href="#">Home</a></li>
               <li><a href="index.html">Create Poll</a></li>
               <li><a href="PageHeader.html">Profile</a></li>
               <li><a href="#">More</a></li>
           </ul>
           </nav>
        </div>
    </div>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 <br>
 <div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Profile Info </h1>
 </div><br>

 <!-- <label> Id: </label>
 <input type="text" name="id_new" class="form-control"><br> -->

 <label> Name :</label>
 <input type="text" name="names" class="form-control"> <br>

 <label> Email :</label>
 <input type="text" name="email" class="form-control"> <br>

 <label> Password: </label>
 <input type="text" name="password" class="form-control"> <br>

 <label> Age :</label>
 <input type="text" name="age" class="form-control"> <br>
 
 <label> City :</label>
 <input type="text" name="city" class="form-control"> <br>
 
 <label> Country :</label>
 <input type="text" name="country" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Update </button><br>

 <button class="btn btn-success"><a href="viewProfile.php" style="color:white;text-decoration:none;"> ← Back To View Profile</a> </button><br>
 </div>
 </form>
 
 </div>
 
</body>
</html>