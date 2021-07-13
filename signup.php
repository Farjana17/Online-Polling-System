<?php

    require "dbconnect.php";

    $formData = $_POST["formData"];

    $obj = json_decode($formData);

    $name = filter_var($obj->name, FILTER_SANITIZE_STRING);
    $email = filter_var($obj->email, FILTER_SANITIZE_EMAIL);
    $password = filter_var($obj->password, FILTER_SANITIZE_STRING);
    $age = $obj->age;
    $country = filter_var($obj->country, FILTER_SANITIZE_STRING);
    $city = filter_var($obj->city, FILTER_SANITIZE_STRING);

    $queryString = "INSERT INTO signup (name, email, password, age, country, city) VALUES ('$name', '$email', '$password', $age, '$country', '$city')";

    createDatabaseConnection();

    executeQuery($queryString);

    closeDatabaseConnection();

    echo "User Info Added !";

?>