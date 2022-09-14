<?php $title = "Service - Change your Service info"; ?>
<?php require_once "includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Service</h1>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Add Service</h5>
                </div>
                <div class="card-body">
                    <form action="service_post.php" method="post">
                        <div class="example-container">
                            <div class="example-content">
                                <?php if (isset($_SESSION["pass_change_success"])) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Congratulations!</strong> <?= $_SESSION['pass_change_success'] ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                <?php unset($_SESSION['pass_change_success']); ?>
                                <label for="service_name" class="form-label">Service Name</label>
                                <input type="text" class="form-control" id="service_name" name="service_name">
                                <div id="emailHelp" class="form-text text-danger">
                                    <?php
                                    if (isset($_SESSION['pass_error'])) {
                                        echo $_SESSION['pass_error'];
                                    }
                                    ?>
                                    <?php unset($_SESSION['pass_error']); ?>
                                </div>
                                <label for="service_des" class="form-label">Service Description</label>
                                <input type="text" class="form-control" id="service_des" name="service_des">
                                <div id="emailHelp" class="form-text text-danger">
                                    <?php
                                    if (isset($_SESSION['password_error'])) {
                                        echo $_SESSION['password_error'];
                                    }
                                    ?>
                                    <?php unset($_SESSION['password_error']); ?>
                                </div>
                                <label for="service_icon" class="form-label">Service Icon</label>
                                <span id="view_style" class=""><i id="view_icon" class=""></i></span>
                                <input readonly type="text" class="form-control" id="service_icon" name="service_icon">
                                <div class="card text-start">
                                    <div class="card-header">
                                        <h4 class="card-title">Icon</h4>
                                    </div>
                                  <div class="card-body text-dark" style="overflow-y: scroll; height: 250px;">
                                    <?php
                                        require_once 'fonts.php';
                                    ?>
                                    <?php foreach($fontAwesomeIcons as $font): ?>
                                    <span class="badge badge-dark m-1 icon_span" id="<?= $font ?>"><i class="fa-2x <?= $font ?>"></i></span>
                                    <?php endforeach; ?>
                                  </div>
                                </div>
                                <label for="service_icon" class="form-label">Service Status</label>
                                <select name="status" class="form-control"> 
                                    <option value="active">Active</option>
                                    <option value="deactive">Deactive</option>
                                </select>
                            </div>
                            <div class="example-content">
                                <button type="submit" class="btn btn-success">Add Service</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
<?php require_once "includes/footer.php"; ?>

<script>
    $(document).ready(function(){
        $('.icon_span').click(function(){
        //    alert($(this).attr('id'))
        $('#service_icon').val($(this).attr('id'));
        $('#view_icon').removeClass();
        $('#view_icon').addClass($(this).attr('id'));
        $('#view_style').removeClass();
        $('#view_style').addClass('badge badge-success fa-2x');

        });
    });
</script>