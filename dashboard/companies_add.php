<?php $title = "Service - Change your Service info"; ?>
<?php require_once "includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Companies</h1>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Add Companies</h5>
                </div>
                <div class="card-body">
                    <form action="company_image_post.php" method="post" enctype="multipart/form-data">
                        <div class="example-container">
                            <div class="example-content">
                                <label for="company_image" class="form-label">Company Image</label>
                                <input type="file" class="form-control" id="company_image" name="company_image">  
                            </div>
                            <div class="example-content">
                                <button type="submit" class="btn btn-success">Add Image</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Company List</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                                $select_query = "SELECT * FROM `companies`";
                                $companies = mysqli_query($db_connect, $select_query);
                                $serial = 1;
                            ?>
                            <tbody>
                                <?php foreach($companies as $company):?>
                                <tr>
                                    <td><?=$serial++?></td>
                                    <td> <img height="50" src="uploads/company_photos/<?=$company['company_image']?>" alt=""> </td>
                                    <td>
                                        <a href="company_delete.php?id=<?=$company['id'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</div>
<?php require_once "includes/footer.php"; ?>