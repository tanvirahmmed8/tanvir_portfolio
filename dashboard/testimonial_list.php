<?php $title = "Testimonial - Testimonial List"; ?>
<?php require_once "includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Testimonial List</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Add Testimonial</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>SL NO</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $select_query = "SELECT * FROM `testimonials`";
                                $testimonials = mysqli_query($db_connect, $select_query);
                                $serial = 1;
                            ?>
                            <?php foreach($testimonials as $testimonial): ?>
                                <tr>
                                    <td><?=$serial++ ?></td>
                                    <td><?=$testimonial['name'] ?></td>
                                    <td><?=$testimonial['designation'] ?></td>
                                    <td><?=$testimonial['description'] ?></td>
                                    <td><img height="70" src="uploads/testimonials_photos/<?=$testimonial['image'] ?>" alt=""></td>
                                    <td>
                                        <button value="testimonial_delete.php?id=<?= $testimonial['id'] ?>" class="btn btn-danger delete_btn">Delete</button>
                                        <a href="testimonial_edit.php?id=<?= $testimonial['id'] ?>" class="btn btn-success">Edit</a>
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
            }
            })
        })
    });
</script>