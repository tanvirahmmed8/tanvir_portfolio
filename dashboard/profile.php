<?php $title = "Profile - Change your profile info"; ?>
<?php require_once "includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Profile</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Name</h5>
                    <br>
                    <?php if (isset($_SESSION['name_change_status'])) : ?>
                        <div class="alert alert-custom alert-indicator-top indicator-success" role="alert">
                            <div class="alert-content">
                                <span class="alert-title">Success!</span>
                                <span class="alert-text"><?= $_SESSION['name_change_status']; ?></span>
                            </div>
                        </div>
                    <?php endif;
                    unset($_SESSION['name_change_status']); ?>
                </div>
                <div class="card-body">
                    <form action="profile_post.php" method="post">
                        <div class="example-container">
                            <div class="example-content">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= $_SESSION['s_name'] ?>">
                            </div>
                            <div class="example-content">
                                <button name="name_change" type="submit" class="btn btn-success">Change Name</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Profile Photo</h5>
                </div>
                <div class="card-body">
                    <form action="profile_post.php" method="post" enctype="multipart/form-data">
                        <div class="example-container">
                            <div class="example-content">
                                <label for="profile_photo" class="form-label">Your Profile Photo</label>
                                <input type="file" class="form-control" id="profile_photo" name="profile_photo">
                            </div>
                            <div class="example-content">
                                <button name="photo_upload" type="submit" class="btn btn-success">Change Photo</button>
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
                    <h5 class="card-title">Change Password</h5>
                </div>
                <div class="card-body">
                    <form action="profile_post.php" method="post">
                        <div class="example-container">
                            <div class="example-content">
                                <?php if (isset($_SESSION["pass_change_success"])) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Congratulations!</strong> <?= $_SESSION['pass_change_success'] ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                <?php unset($_SESSION['pass_change_success']); ?>
                                <label for="current_password" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="current_password" name="current_password">
                                <div id="emailHelp" class="form-text text-danger">
                                    <?php
                                    if (isset($_SESSION['pass_error'])) {
                                        echo $_SESSION['pass_error'];
                                    }
                                    ?>
                                    <?php unset($_SESSION['pass_error']); ?>
                                </div>
                                <label for="new_password" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="new_password" name="new_password">
                                <div id="emailHelp" class="form-text text-danger">
                                    <?php
                                    if (isset($_SESSION['password_error'])) {
                                        echo $_SESSION['password_error'];
                                    }
                                    ?>
                                    <?php unset($_SESSION['password_error']); ?>
                                </div>
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                                <div id="emailHelp" class="form-text text-danger">
                                    <?php
                                    if (isset($_SESSION['cpassword_error'])) {
                                        echo $_SESSION['cpassword_error'];
                                    }
                                    ?>
                                    <?php unset($_SESSION['cpassword_error']); ?>
                                </div>
                            </div>
                            <div class="example-content">
                                <button name="change_password" type="submit" class="btn btn-success">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Phone Number Update</h5>
                </div>
                <div class="card-body">
                    <form action="profile_post.php" method="post">
                        <div class="example-container">
                        <?php if (isset($_SESSION["phone_number_change_success"])) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Congratulations!</strong> <?= $_SESSION['phone_number_change_success'] ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                <?php unset($_SESSION['phone_number_change_success']); ?>
                            <div class="example-content">
                                <label for="phone_number" class="form-label">Your Phone Number</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?=$phn?>">
                                <div id="emailHelp" class="form-text text-danger">
                                    <?php
                                    if (isset($_SESSION['phone_number_empty'])) {
                                        echo $_SESSION['phone_number_empty'];
                                    }
                                    ?>
                                    <?php unset($_SESSION['phone_number_empty']); ?>
                                </div>
                            </div>
                            <div class="example-content">
                                <button name="phone_number_upload" type="submit" class="btn btn-success">Change Phone Number</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "includes/footer.php"; ?>