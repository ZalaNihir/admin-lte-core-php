<?php
include('layouts/header.php');
require('config/conn.php');
$selectecategories = "SELECT * FROM categories";
$result = $conn->query($selectecategories);
?>
<div class="content-wrapper">
    <div class="container">
        <div class="card-header">
            <h3 class="card-title">Categories</h3>
            <div class="card-tools">
                <a href="create_category.php" class="btn btn-primary">Add Category</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Task</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($category = $result->fetch_assoc()) { ?>
                    <?php $id = $category['id']; ?>
                    <tr>
                        <td><?php echo($id);  ?></td>
                        <td><?php echo($category['name']);  ?></td>
                        <td><?php echo($category['created_at']);  ?></td>
                        <td>
                            <a href="edit_category.php?id=<?php echo($id) ?>" class="btn btn-sm btn-secondary">Edit</a>
                            <a href="deleted_category.php?id=<?php echo($id) ?>" onclick="return confirm('Are your sure?')" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>

<?php
include('layouts/footer.php');
?>