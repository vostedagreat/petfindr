<?php
//Check if the button has been clicked
if (isset($_POST["submit"])){
    //Receive the data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //Connect to the database to save data
    require_once "db_connection.php";
    //Create an insert query
    $insertQuery = "INSERT INTO `users`(`id`, `jina`, `nenosiri`, `arafa`) 
        VALUES (NULL,'$name','$email','$pass')";
    //Execute the query using the mysqli_query function()
    $save = mysqli_query($conn, $insertQuery);
    //Check if the saving was successful
    if (isset($save)){
        echo "User registered successfully";
    }else{
        echo "User registration failed";
    }
}
header("location:../index.html?signup=success");