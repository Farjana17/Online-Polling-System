<?php ob_start(); 
     if(!isset($_SESSION["email"]))
     {
         header("Location: login.php");
     }
?>


<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

<div class="header">
       <a href="#">Online Polling</a>
       <div class="right-header">
   <nav id="link">
           <ul>
               <li><a href="#">Home</a></li>
               <li><a href="index.html">Create Poll</a></li>
               <li><a class="active" href="PageHeader.html">Profile</a></li>
               <li><a href="#">Log Out</a></li>
           </ul>
           </nav>
        </div>
    </div>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning" style="float:left;margin-bottom:35px" > Displaying User's Information :</h1>
 <button class="poll-btn" style="float:right;margin-bottom:30px;"
  onclick="window.location.href = 'Pageheader.html';"> 
  ← Back To Profile
  </button>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> ID </th>
 <th> Name </th>
 <th> Email </th>
 <th> Age </th>
 <th> City </th>
 <th> Country </th>
 <th> Delete </th>
 <th> Update </th>
 

 </tr >

 <?php

 include 'connection.php'; 
 $q = "SELECT * FROM users ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_assoc($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['Name'];  ?> </td>
 <td> <?php echo $res['Email']; ?> </td>
 <td> <?php echo $res['Age']; ?> </td>
 <td> <?php echo $res['City']; ?> </td>
 <td> <?php echo $res['Country']; ?> </td>

 <td> <button class="btn-danger btn"> <a href="deletenew.php?ID=<?php echo $res['id']; ?>" class="text-white"> Delete  Account</a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?ID=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

</body>
</html>
