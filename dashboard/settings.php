<?php $title = "Service - Change your Service info"; ?>
<?php require_once "includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>General Settings</h1>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Add Settings</h5>
                </div>
                <div class="card-body">
                    <form action="settings_post.php" method="post">
                        <div class="example-container">
                            <div class="example-content">
                                <?php 
                                require_once "includes/db.php";
                                 $select_query = "SELECT * FROM settings";
                                 $settings = mysqli_query($db_connect, $select_query);
                                ?>
                                   
                                <?php foreach($settings as $setting): ?>
                               
                                <label for="<?=$setting['setting_name']?>" class="form-label"><?=ucwords(str_replace("_"," ", $setting['setting_name']))?></label>
                                <br>
                                <input type="text" class="form-control" id="<?=$setting['setting_name']?>" name="<?=$setting['setting_name']?>" value="<?=$setting['setting_value']?>">
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