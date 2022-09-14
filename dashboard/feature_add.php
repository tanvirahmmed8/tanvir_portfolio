<?php $title = "Service - Change your Service info"; ?>
<?php require_once "includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Feature</h1>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Add Feature</h5>
                </div>
                <div class="card-body">
                    <form action="feature_post.php" method="post">
                        <div class="example-container">
                            <div class="example-content">
                                <?php if (isset($_SESSION["success"])) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Congratulations!</strong> <?= $_SESSION['success'] ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                <?php unset($_SESSION['success']); ?>
                                <label for="features_name" class="form-label">Feature Name</label>
                                <input type="text" class="form-control" id="features_name" name="features_name">
                    
                                <label for="features_count" class="form-label">Feature Count</label>
                                <input type="number" class="form-control" id="features_count" name="features_count">
                                <label for="features_icon" class="form-label">Feature Icon</label>
                                <span id="view_style" class=""><i id="view_icon" class="aa"></i></span>
                                <input type="text" readonly class="form-control" id="features_icon" name="features_icon">
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
                                
                            </div>
                            <div class="example-content">
                                <button type="submit" class="btn btn-success">Add Feature</button>
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
        $('#features_icon').val($(this).attr('id'));
        $('#view_icon').removeClass();
        $('#view_icon').addClass($(this).attr('id'));
        $('#view_style').removeClass();
        $('#view_style').addClass('badge badge-success fa-2x');

        });
    });
</script>