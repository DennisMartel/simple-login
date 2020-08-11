<?php
session_start();

include '../config/db.php';

if($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM usuarios WHERE (email = '$email' && password = '$password')";
    $response = mysqli_query($conn, $query);

    if(mysqli_num_rows($response) > 0) {
        echo json_encode(array('success' => 1));
    } else {
        echo json_encode(array('success' => 0));
    }
}

