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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Add Skill</h5>
                </div>
                <div class="card-body">
                    <form action="skill_post.php" method="post">
                        <div class="example-container">
                            <div class="example-content">
                                <label for="sujbect" class="form-label">Sujbect</label>
                                <input type="text" class="form-control" id="sujbect" name="sujbect">  
                           
                                <label for="year" class="form-label">Year</label>
                                <input type="text" class="form-control" id="year" name="year">
                                <label for="percentage" class="form-label">Percentage</label>
                                <input type="number" class="form-control" id="percentage" name="percentage">
                                <span class=" text-danger">Select Percentage 100 out of....</span>  
                            </div>
                            <div class="example-content">
                                <button type="submit" class="btn btn-success">Add Skill</button>
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
                    <h5 class="card-title">Skill List</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Sujbect</th>
                                    <th>Percentage</th>
                                    <th>Year</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                                $select_query = "SELECT * FROM `skills`";
                                $skills = mysqli_query($db_connect, $select_query);
                                $serial = 1;
                            ?>
                            <tbody>
                                <?php foreach($skills as $skill):?>
                                <tr>
                                    <td><?=$serial++?></td>
                                    <td><?=$skill['sujbect']?></td>
                                    <td><?=$skill['percentage']?>% Out of 100</td>
                                    <td><?=$skill['year']?></td>
                                    <td>
                                        <a href="skill_delete.php?id=<?=$skill['id'] ?>" class="btn btn-danger">Delete</a>
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
        $('#features_icon').val($(this).attr('id'));
        $('#view_icon').removeClass();
        $('#view_icon').addClass($(this).attr('id'));
        $('#view_style').removeClass();
        $('#view_style').addClass('badge badge-success fa-2x');

        });
    });
</script>