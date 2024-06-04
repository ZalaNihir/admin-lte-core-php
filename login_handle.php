<?php
require('config/conn.php');
session_start();

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    // $name = $_POST['name'];
    // $password = $_POST['password'];

    $name_pass_check = "SELECT * FROM `users` WHERE name='$name' && password='$password'";
    $run = mysqli_query($conn, $name_pass_check);
    $row = mysqli_fetch_assoc($run);

    if ($row) {
        $_SESSION['name'] = $row['name'];
        $_SESSION['password'] = $row['password'];
        header("location:welcome.php?name=$name");
    }

    // if ($row['name']==$name && $row['password']==$password) {
    //     $_SESSION['name'] = $row['name'];
    //     $_SESSION['password'] = $row['password'];
    //     header('location:welcome.php');
    // }
    else {
        echo "<h2>Data not Found!</h2>";
    }
}

if (isset($_POST['register'])) {
    header('location:register.php');
}
?>