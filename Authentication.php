<?php

require 'connection.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $sql = "select * from signup where email='" . $Email . "';";
    $results = $conn->query($sql);

    if ($results->num_rows == 1) {
        $row = $results->fetch_assoc();
        if (password_verify($Password, $row['Password'])) {
            $_SESSION['name']=$row['Firstname'];
            echo $_SESSION['name'];
            $_SESSION['email']=$row['Email'];
            
            header("Location: http://localhost/prabin/index1.php");
            exit();
        } else {
            echo "Password didn't match";
        }
    } else {
        echo "User not found";
    }
}

$conn->close();
?>
