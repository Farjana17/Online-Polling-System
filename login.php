<?php
    $msg = "";

    require "dbconnect.php";
    session_start();
    if(isset($_SESSION['email']))
    {
    $email=$_SESSION['email'];
    }
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        
    
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $password = filter_var($password, FILTER_SANITIZE_STRING);
        
        $queryString = "select id from signup where email='$email' and password='$password'";
        createDatabaseConnection();
    
        $result = executeAndGetQuery($queryString);
        closeDatabaseConnection();
    
        if(count($result) == 1)
        {
            header("Location: vote.php");
        }
        else
        {
            $msg = "INVALID EMAIL/PASSWORD!";
        }
        
    
    }
    
    


?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <a href="#">Online Polling</a>
        <div class="right-header">
    <nav id="link">
       <ul>
             <li><a href="#">Home</a></li>
             <li><a href="signup.html">Signup</a></li>
            <li><a class="active" href="PageHeader.html">Profile</a></li>
            <li><a href="logout.php">Log Out</a></li>
        <!--<div class="dropdown">
            <button class="dropbtn">More</button>
        <div class="dropdown-content">
            <a href="#">About</a>
            <a href="#">Help</a>
            <a href="#">Profile</a>
            <a href="#">Log Out</a>
          </div>
        </div> -->
        </ul>
        
        </nav>
    </div>
</div>
    
    <h1>Login</h1>

    <h3 style="color: mediumseagreen;">
        <?php
            echo $msg;  
        ?>
    </h3>

    <form action="" method="POST">
        <table>
            <tr>    
                <td>Email:</td>
                <td><input type="email" name="email" required></td>
                
            </tr>

            <tr>    
                <td>Password:</td>
                <td><input type="password" name="password" required></td>
                
            </tr>

            <tr>   
                <td align="right" colspan="2" style="padding-top: 20px;">
                <input type="submit" name="submit" value="Login">
              
                <input type="reset" style="margin-left: 10px;" name="resetButton" value="Reset">
                    
            </tr>
        </table>
    </form>
     <!--Second footer-->
     <footer class="last-footer">
        <p><a href="terms.html"><hr>Terms & Condition</a> <span></span> &copy; 2020 The C Team</p>
     

</body>


</html>