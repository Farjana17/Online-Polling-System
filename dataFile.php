<?php
$connection = mysqli_connect("localhost", "root","", "async_db");
$sql = "SELECT * FROM createpoll";
$result = mysqli_query($connection, $sql);
$identifiers = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo json_encode($identifiers);
?>