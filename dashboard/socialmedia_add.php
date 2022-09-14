<?php $title = "Social Media info"; ?>
<?php require_once "includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Social Media</h1>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Add Social Media</h5>
                </div>
                <div class="card-body">
                    <form action="socialmedia_post.php" method="post">
                        <div class="example-container">
                            <div class="example-content">
                                <?php if (isset($_SESSION["success"])) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Congratulations!</strong> <?= $_SESSION['success'] ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                <?php unset($_SESSION['success']); ?>
                                <label for="socialmedialink" class="form-label">Social Media Link</label>
                                <input type="text" class="form-control" id="socialmedialink" name="socialmedialink">
                                <div id="emailHelp" class="form-text text-danger">
                                    <?php
                                    if (isset($_SESSION['link_error'])) {
                                        echo $_SESSION['link_error'];
                                    }
                                    ?>
                                    <?php unset($_SESSION['link_error']); ?>
                                </div>
                                <label for="socialmedia_icon" class="form-label">Service Icon</label>
                                <span id="view_style" class=""><i id="view_icon" class=""></i></span>
                                <input readonly type="text" class="form-control" id="socialmedia_icon" name="socialmedia_icon">
                                <div id="emailHelp" class="form-text text-danger">
                                    <?php
                                    if (isset($_SESSION['icon_error'])) {
                                        echo $_SESSION['icon_error'];
                                    }
                                    ?>
                                    <?php unset($_SESSION['icon_error']); ?>
                                </div>
                                <div class="card text-start">
                                    <div class="card-header">
                                        <h4 class="card-title">Icon</h4>
                                    </div>
                                  <div class="card-body text-dark" style="overflow-y: scroll; height: 200px;">
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
                                <button type="submit" class="btn btn-success">Add Social Media</button>
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
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>ICON</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                                $select_query = "SELECT * FROM `socialmedias`";
                                $socialmedias = mysqli_query($db_connect, $select_query);
                                $serial = 1;
                            ?>
                            <tbody>
                                <?php foreach($socialmedias as $socialmedia):?>
                                <tr>
                                    <td><?=$serial++?></td>
                                    <td> <i class="fa-2x <?=$socialmedia['socialmedia_icon']?>"></i> </td>
                                    <td>  
                                        <?=$socialmedia['socialmedialink']?>
                                    </td>
                                    <td>
                                        <a href="socialmedia_delete.php?id=<?=$socialmedia['id'] ?>" class="btn btn-danger">Delete</a>
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

<script>
    $(document).ready(function(){
        $('.icon_span').click(function(){
        //    alert($(this).attr('id'))
        $('#socialmedia_icon').val($(this).attr('id'));
        $('#view_icon').removeClass();
        $('#view_icon').addClass($(this).attr('id'));
        $('#view_style').removeClass();
        $('#view_style').addClass('badge badge-success fa-2x');

        });
    });
</script>