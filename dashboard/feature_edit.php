<?php $title = "Service - Change your Service info"; ?>
<?php require_once "includes/header.php"; ?>

<?php 
$f_id = $_GET['id'];
$select_query = "SELECT * FROM features WHERE id=$f_id";
$query_run = mysqli_query($db_connect, $select_query);
$feature_from_db = mysqli_fetch_assoc($query_run);
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Feature - <?=$feature_from_db['features_name'];?></h1>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Feature</h5>
                </div>
                <div class="card-body">
                    <form action="feature_edit_post.php" method="post">
                        <div class="example-container">
                            <div class="example-content">
                                <?php if (isset($_SESSION["success"])) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Congratulations!</strong> <?= $_SESSION['success'] ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                <?php unset($_SESSION['success']); ?>
                                <input hidden type="text" name="id" value="<?=$f_id?>">
                                <label for="features_name" class="form-label">Feature Name</label>
                                <input type="text" class="form-control" id="features_name" name="features_name" value="<?=$feature_from_db['features_name'];?>">
                    
                                <label for="features_count" class="form-label">Feature Count</label>
                                <input type="number" class="form-control" id="features_count" name="features_count" value="<?=$feature_from_db['features_count'];?>">
                                <label for="features_icon" class="form-label">Feature Icon</label>
                                <span id="view_style" class="badge badge-success fa-2x "><i id="view_icon" class="<?=$feature_from_db['features_icon']?>"></i></span>
                                <input type="text" readonly class="form-control" id="features_icon" name="features_icon" value="<?=$feature_from_db['features_icon']?>">
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
                                <button type="submit" class="btn btn-success">Update Feature</button>
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
       

        });
    });
</script>