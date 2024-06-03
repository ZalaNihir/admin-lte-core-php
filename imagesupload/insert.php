<?php
include 'connection.php';

if (isset($_POST['submit'])) {

    $imgName = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    $folder = "images/" . $imgName;
    $data = move_uploaded_file($tmpName, $folder);

    $sql = "insert into studimg(imgupload) values('$folder')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header('location:display.php');
    }
}
