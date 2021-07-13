<?php
ob_start();
include 'connection.php';

$id = $_GET['ID'];

$q = "DELETE FROM users WHERE id ='$id' ";

$delete_query=mysqli_query($con,$q);



 header('location:PageHeader.html');

?>