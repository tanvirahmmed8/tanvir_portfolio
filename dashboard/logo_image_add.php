<?php $title = "Service - Change your Service info"; ?>
<?php require_once "includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Logo And Image</h1>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Add Logo And Image</h5>
                </div>
                <div class="card-body">
                    <form action="logo_image_post.php" method="post" enctype="multipart/form-data">
                        <div class="example-container">
                            <div class="example-content">
                                <?php 
                                require_once "includes/db.php";
                                 $select_query = "SELECT * FROM logo_images";
                                 $logo_images = mysqli_query($db_connect, $select_query);
                                ?>
                                   
                                <?php foreach($logo_images as $logo_image): ?>
                                <img src="" alt="">
                                <label for="<?=$logo_image['image_type']?>" class="form-label"><?=ucwords(str_replace("_"," ", $logo_image['image_type']))?></label>
                                <br>
                                <!-- <input type="text" name="img_nm_<?=$logo_image['id']?>" value="<?=$logo_image['image_value']?>"> -->
                                <input type="file" class="form-control" id="<?=$logo_image['image_type']?>" name="<?=$logo_image['image_type']?>" value="aaaa">
                                <?php endforeach; ?>
                            </div>
                            <div class="example-content">
                                <button type="submit" class="btn btn-success">Save Settings</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
<?php require_once "includes/footer.php"; ?>