<?php $title = "Service - Change your Service info"; ?>
<?php require_once "includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Skills</h1>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Portfolio List</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Portfolio Name</th>
                                    <th>PCategory</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                                $select_query = "SELECT * FROM `portfolios`";
                                $portfolios = mysqli_query($db_connect, $select_query);
                                $serial = 1;
                            ?>
                            <tbody>
                                <?php foreach($portfolios as $portfolio):?>
                                <tr>
                                    <td><?=$serial++?></td>
                                    <td><?=$portfolio['portfolio_name']?></td>
                                    <td><?=$portfolio['portfolio_category']?></td>
                                    <td><img height="80" src="uploads/portfolio_image/<?=$portfolio['portfolio_image']?>" alt="<?=$portfolio['portfolio_image']?>"></td>
                                    <td>
                                        <a href="portfolio_delete.php?id=<?=$portfolio['id'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div> 
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Add Portfolio</h5>
                </div>
                <div class="card-body">
                    <form action="portfolio_post.php" method="post" enctype="multipart/form-data">
                        <div class="example-container">
                            <div class="example-content">
                                <label for="portfolio_category" class="form-label">Portfolio Category</label>
                                <input type="text" class="form-control" id="portfolio_category" name="portfolio_category">  
                                <label for="portfolio_name" class="form-label">Portfolio Name</label>
                                <input type="text" class="form-control" id="portfolio_name" name="portfolio_name">
                                <label for="portfolio_image" class="form-label">Portfolio Image</label>
                                <input type="file" class="form-control" id="portfolio_image" name="portfolio_image">
                                
                                <label for="portfolio_details" class="form-label">Portfolio Details</label>
                                <textarea name="portfolio_details" class="form-control" id="portfolio_details" rows="5"></textarea>
                            </div>
                            <div class="example-content">
                                <button type="submit" class="btn btn-success">Add Portfolio</button>
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