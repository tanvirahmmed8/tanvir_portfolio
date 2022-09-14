<?php $title = "Service - Service List"; ?>
<?php require_once "includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Service List</h1>
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
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>SL NO</th>
                                <th>Service Name</th>
                                <th>Description</th>
                                <th>Icon</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $select_query = "SELECT * FROM `services`";
                                $services = mysqli_query($db_connect, $select_query);
                                $serial = 1;
                            ?>
                            <?php foreach($services as $service): ?>
                                <tr>
                                    <td><?=$serial++ ?></td>
                                    <td><?=$service['service_name'] ?></td>
                                    <td><?=$service['service_des'] ?></td>
                                    <td><i class="fa-2x <?=$service['service_icon'] ?>"></i></td>
                                    <td>
                                        <?php if($service['status'] == 'active'): ?>
                                            <badge class="badge bg-primary">Active</badge>
                                        <?php else: ?>
                                            <badge class="badge bg-warning">Deactive</badge>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <!-- <a href="service_delete.php?id=<?= $service['id'] ?>" class="btn btn-danger">Delete</a> -->
                                        <button value="service_delete.php?id=<?= $service['id'] ?>" class="btn btn-danger delete_btn">Delete</button>
                                        <a href="service_edit.php?id=<?= $service['id'] ?>" class="btn btn-success">Edit</a>
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