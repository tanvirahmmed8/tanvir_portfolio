

<?php $title = "Service - Change your Service info"; ?>
<?php require_once "includes/header.php"; ?>

<?php 
$s_id = $_GET['id'];
$select_query = "SELECT * FROM services WHERE id=$s_id";
$query_run = mysqli_query($db_connect, $select_query);
$service_from_db = mysqli_fetch_assoc($query_run);
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Service - <?=$service_from_db['service_name'];?></h1>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Service</h5>
                </div>
                <div class="card-body">
                    <form action="service_edit_post.php" method="post">
                        <div class="example-container">
                            <div class="example-content">
                                
                                <input hidden type="text" name="id" value="<?=$s_id?>">
                                <label for="service_name" class="form-label">Service Name</label>
                                <input type="text" class="form-control" id="service_name" name="service_name" value="<?=$service_from_db['service_name'];?>">
                                <div id="emailHelp" class="form-text text-danger">
                                   
                                </div>
                                <label for="service_des" class="form-label">Service Description</label>
                                <input type="text" class="form-control" id="service_des" name="service_des" value="<?=$service_from_db['service_des'];?>">
                               
                                <label for="service_icon" class="form-label">Service Icon</label>
                                <span id="view_style" class="badge badge-success fa-2x"><i id="view_icon" class="<?=$service_from_db['service_icon'];?>"></i></span>
                                <input readonly type="text" class="form-control" id="service_icon" name="service_icon" value="<?=$service_from_db['service_icon'];?>">
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
                                <label for="status" class="form-label">Service Status</label>
                                <select name="status" class="form-control"> 
                                    <option <?=($service_from_db['status'] == 'active') ? 'selected':'';?> value="active">Active</option>
                                    <option <?=($service_from_db['status'] == 'deactive') ? 'selected':'';?> value="deactive">Deactive</option>
                                </select>
                            </div>
                            <div class="example-content">
                                <button type="submit" class="btn btn-success">Update Service</button>
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

        });
    });
</script>