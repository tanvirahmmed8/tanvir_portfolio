<?php $title = "Feature - Feature List"; ?>
<?php require_once "includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Feature List</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">List Feature</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>SL NO</th>
                                <th>Feature Name</th>
                                <th>Feature count</th>
                                <th>Icon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $select_query = "SELECT * FROM `features`";
                                $features = mysqli_query($db_connect, $select_query);
                                $serial = 1;
                            ?>
                            <?php foreach($features as $feature): ?>
                                <tr>
                                    <td><?=$serial++ ?></td>
                                    <td><?=$feature['features_name'] ?></td>
                                    <td><?=$feature['features_count'] ?></td>
                                    <td><i class="fa-2x <?=$feature['features_icon'] ?>"></i></td>
                                    <td>
                                        
                                        <button value="feature_delete.php?id=<?= $feature['id'] ?>" class="btn btn-danger delete_btn">Delete</button>
                                        <a href="feature_edit.php?id=<?= $feature['id'] ?>" class="btn btn-success">Edit</a>
                                        
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
<?php require_once "includes/footer.php"; ?>

<script>
    $(document).ready(function() {
        $('.delete_btn').click(function(){
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = $(this).val();
                // Swal.fire(
                //     'Deleted!',
                //     'Your file has been deleted.',
                //     'success'
                //     )
            }
            })
        })
    });
</script>