<?php
require('config/conn.php');
$id = $_GET['id'];
$sql = "DELETE FROM `categories` WHERE `categories`.`id` = $id";
$result = $conn->query($sql);
if($result){
    header('location:categories.php');
}