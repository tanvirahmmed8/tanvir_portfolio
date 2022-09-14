<?php $title = "Service - Change your Service info"; ?>
<?php require_once "includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Testimonial</h1>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Add Testimonial</h5>
                </div>
                <div class="card-body">
                    <form action="testimonial_post.php" method="post" enctype="multipart/form-data">
                        <div class="example-container">
                            <div class="example-content">
                                <?php if (isset($_SESSION["success"])) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Congratulations!</strong> <?= $_SESSION['success'] ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                <?php unset($_SESSION['success']); ?>
                                <label for="name" class="form-label">Testimonial Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                    
                                <label for="designation" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="7"></textarea>
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                                
                            </div>
                            <div class="example-content">
                                <button type="submit" class="btn btn-success">Add Testimonial</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
<?php require_once "includes/footer.php"; ?>
