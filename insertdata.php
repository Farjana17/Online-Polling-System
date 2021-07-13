<?php
$conn= mysqli_connect('localhost', 'root', '', 'polling_system');

$title= $_GET['a'];
$ans1= $_GET['b'];
$ans2= $_GET['c'];
$ans3= $_GET['d'];
$ans4= $_GET['e'];
$ans5= $_GET['f'];

$sql="INSERT INTO createpoll(title, ans1, ans2, ans3, ans4,ans5) VALUES  ('$title','$ans1','$ans2','$ans3','$ans4','$ans5')";
mysqli_query($conn,$sql);
?>