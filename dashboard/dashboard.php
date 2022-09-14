<?php $title = "Dashboard - Welcome"; ?>
<?php require_once "includes/header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Dashboard</h1>
                <h2>Hello <?= $_SESSION['s_name']; ?>, (<?= $_SESSION['s_email']; ?>).</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <div class="card widget widget-stats">
                <div class="card-body">
                    <div class="widget-stats-container d-flex">
                        <div class="widget-stats-icon widget-stats-icon-primary">
                            <i class="material-icons-outlined">paid</i>
                        </div>
                        <div class="widget-stats-content flex-fill">
                            <span class="widget-stats-title">Today's Sales</span>
                            <span class="widget-stats-amount">$38,211</span>
                            <span class="widget-stats-info">471 Orders Total</span>
                        </div>
                        <div class="widget-stats-indicator widget-stats-indicator-negative align-self-start">
                            <i class="material-icons">keyboard_arrow_down</i> 4%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card widget widget-stats">
                <div class="card-body">
                    <div class="widget-stats-container d-flex">
                        <div class="widget-stats-icon widget-stats-icon-warning">
                            <i class="material-icons-outlined">person</i>
                        </div>
                        <div class="widget-stats-content flex-fill">
                            <span class="widget-stats-title">Active Users</span>
                            <span class="widget-stats-amount">23,491</span>
                            <span class="widget-stats-info">790 unique this month</span>
                        </div>
                        <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                            <i class="material-icons">keyboard_arrow_up</i> 12%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card widget widget-stats">
                <div class="card-body">
                    <div class="widget-stats-container d-flex">
                        <div class="widget-stats-icon widget-stats-icon-danger">
                            <i class="material-icons-outlined">file_download</i>
                        </div>
                        <div class="widget-stats-content flex-fill">
                            <span class="widget-stats-title">Downloads</span>
                            <span class="widget-stats-amount">140,390</span>
                            <span class="widget-stats-info">87 items downloaded</span>
                        </div>
                        <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                            <i class="material-icons">keyboard_arrow_up</i> 7%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php
        $users_select_queary = "SELECT id, name, email FROM users LIMIT 8";
        $users_count_queary = "SELECT COUNT(*) as total_users FROM users";
        $users_from_db = mysqli_query($db_connect, $users_select_queary);
        $user_count_from_db = mysqli_query($db_connect, $users_count_queary);
        ?>
        <div class="col-xl-6">
            <div class="card widget widget-list">
                <div class="card-header">
                    <h5 class="card-title">New Users<span class="badge badge-success badge-style-light"><?= mysqli_fetch_assoc($user_count_from_db)['total_users'] ?> total</span></h5>
                </div>
                <div class="card-body">
                    <ul class="widget-list-content list-unstyled" style="overflow-y: scroll; height: 380px;">
                        <?php foreach ($users_from_db as $user) : ?>
                            <li class="widget-list-item widget-list-item-red">
                                <span class="widget-list-item-avatar">
                                    <div class="avatar avatar-rounded">
                                        <div class="avatar-title"> <?= $user['id'] ?></div>
                                    </div>
                                </span>
                                <span class="widget-list-item-description">
                                    <h4 class="widget-list-item-description-title">
                                        <?= $user['name'] ?>
                                    </h4>
                                    <span class="widget-list-item-description-subtitle">
                                        <?= $user['email'] ?>
                                    </span>
                                </span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card widget widget-list">
                <div class="card-header">
                    <h5 class="card-title">Active Tasks<span class="badge badge-success badge-style-light">14 completed</span></h5>
                </div>
                <div class="card-body">
                    <span class="text-muted m-b-xs d-block">showing 5 out of 23 active tasks.</span>
                    <ul class="widget-list-content list-unstyled">
                        <li class="widget-list-item widget-list-item-green">
                            <span class="widget-list-item-icon"><i class="material-icons-outlined">article</i></span>
                            <span class="widget-list-item-description">
                                <a href="#" class="widget-list-item-description-title">
                                    Dashboard UI optimisations
                                </a>
                                <span class="widget-list-item-description-subtitle">
                                    Oskar Hudson
                                </span>
                            </span>
                        </li>
                        <li class="widget-list-item widget-list-item-blue">
                            <span class="widget-list-item-icon"><i class="material-icons-outlined">verified_user</i></span>
                            <span class="widget-list-item-description">
                                <a href="#" class="widget-list-item-description-title">
                                    Mailbox cleanup
                                </a>
                                <span class="widget-list-item-description-subtitle">
                                    Woodrow Hawkins
                                </span>
                            </span>
                        </li>
                        <li class="widget-list-item widget-list-item-purple">
                            <span class="widget-list-item-icon"><i class="material-icons-outlined">watch_later</i></span>
                            <span class="widget-list-item-description">
                                <a href="#" class="widget-list-item-description-title">
                                    Header scroll bugfix
                                </a>
                                <span class="widget-list-item-description-subtitle">
                                    Sky Meyers
                                </span>
                            </span>
                        </li>
                        <li class="widget-list-item widget-list-item-yellow">
                            <span class="widget-list-item-icon"><i class="material-icons-outlined">extension</i></span>
                            <span class="widget-list-item-description">
                                <a href="#" class="widget-list-item-description-title">
                                    Localization for file manager
                                </a>
                                <span class="widget-list-item-description-subtitle">
                                    Oskar Hudson
                                </span>
                            </span>
                        </li>
                        <li class="widget-list-item widget-list-item-red">
                            <span class="widget-list-item-icon"><i class="material-icons-outlined">invert_colors</i></span>
                            <span class="widget-list-item-description">
                                <a href="#" class="widget-list-item-description-title">
                                    New E-commerce UX/UI design
                                </a>
                                <span class="widget-list-item-description-subtitle">
                                    Oskar Hudson
                                </span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "includes/footer.php"; ?>