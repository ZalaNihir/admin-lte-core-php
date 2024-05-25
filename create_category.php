<?php
include('layouts/header.php');
require('config/conn.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) 
{
    // Capture form data
    $name = trim($_POST['name']);
    // Validate form data
    if (empty($name)) {
        $error = "Name is required.";
    } else {
        // Prepare an insert statement
        $sql = "INSERT INTO categories (name) VALUES (?)"; // name -- field name & values (name, slug, image) value($name, $slug, $image)
        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_name);
            // Set parameters
            $param_name = $name;
            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Redirect to a success page (optional)
                header("location: categories.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }
            // Close statement
            $stmt->close();
        }
    }
}
?>
<div class="content-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Create Category
            </div>
            <div class="card-body">
                <div class="form">
                    <form action="create_category.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" require>
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