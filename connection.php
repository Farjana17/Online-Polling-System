<?php
ob_start();
$hostname = 'localhost';
$username = 'root';
$userpass ='';
$dbname='polling';


$con= mysqli_connect($hostname,$username, $userpass, $dbname);


?>