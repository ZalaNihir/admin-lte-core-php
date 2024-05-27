<?php
include('layouts/header.php');
require('config/conn.php');
$id = $_GET['id'];
$sql = "SELECT * FROM `categories` WHERE `categories`.`id` = $id";
$result = $conn->query($sql);
if($result == null){
    header("location:categories.php");
}
$category = $result->fetch_assoc();

// if($result){
//     header('location:categories.php');
// }
?>
<div class="content-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Category
            </div>
            <div class="card-body">
                <div class="form">
                    <form action="create_category.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" require value="<?php echo($category['name']); ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="submit" name="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>