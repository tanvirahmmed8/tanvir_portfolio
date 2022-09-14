<div class="app-sidebar">
    <div class="logo">
        <a href="dashboard.php" class="logo-icon"><span class="logo-text">Neptune</span></a>
        <div class="sidebar-user-switcher user-activity-online">
            <a href="#">
                <img src="uploads/profile_photos/<?=$profile_photo?>">
                <span class="activity-indicator"></span>
                <span class="user-info-text"><?= (isset($_SESSION['s_name'])) ? $_SESSION['s_name'] : "" ?><br><span class="user-state-info">Online</span></span>
            </a>
        </div>
    </div>
    <div class="app-menu">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Apps
            </li>
            <li class="<?=($page_name == 'dashboard.php') ? 'active-page':'' ?>">
                <a href="dashboard.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
            </li>
            <li >
                <a href="../index.php" target="_blank" class="active"><i class="material-icons-two-tone">home</i>View Site</a>
            </li>
            <li class="<?=($page_name == 'mailbox.php') ? 'active-page':'' ?>">
                                <?php
                                    $select_msg_count = "SELECT * FROM messages WHERE read_status='unread'";
                                    $messages_count = mysqli_query($db_connect, $select_msg_count);
                                    
                                ?>
                <a href="mailbox.php" class="active"><i class="material-icons-two-tone">inbox</i>Mailbox
                    <?php if($messages_count->num_rows > 0):?>
                        <span class="badge rounded-pill badge-danger float-end"><?= $messages_count->num_rows ?></span>
                    <?php endif; ?>
                </a>     
            </li>
            <li class="<?=($page_name == 'profile.php') ? 'active-page':'' ?>">
                <a href="profile.php"><i class="material-icons-two-tone">face</i>Profile</a>
            </li>
            <li class="<?=($page_name == 'services_add.php' || $page_name == 'services_list.php') ? 'active-page':'' ?>">
                <a href=""><i class="material-icons-two-tone">star</i>Service<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a class="<?=($page_name == 'services_add.php') ? 'active':'' ?>" href="services_add.php">Service Add</a>
                    </li>
                    <li>
                        <a class="<?=($page_name == 'services_list.php') ? 'active':'' ?>" href="services_list.php">Service List</a>
                    </li> 
                </ul>
            </li>
            <li class="<?=($page_name == 'feature_add.php' || $page_name == 'feature_list.php') ? 'active-page':'' ?>">
                <a href=""><i class="material-icons-two-tone">featured_play_list </i>Feature<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a class="<?=($page_name == 'feature_add.php') ? 'active':'' ?>" href="feature_add.php">Feature Add</a>
                    </li>
                    <li>
                        <a class="<?=($page_name == 'feature_list.php') ? 'active':'' ?>" href="feature_list.php">Feature List</a>
                    </li> 
                </ul>
            </li>
            <li class="<?=($page_name == 'testimonial_add.php' || $page_name == 'feature_list.php') ? 'active-page':'' ?>">
                <a href=""><i class="material-icons-two-tone">settings_input_svideo </i>Testimonial<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a class="<?=($page_name == 'testimonial_add.php') ? 'active':'' ?>" href="testimonial_add.php">Testimonial Add</a>
                    </li>
                    <li>
                        <a class="<?=($page_name == 'testimonial_list.php') ? 'active':'' ?>" href="testimonial_list.php">Testimonial List</a>
                    </li> 
                </ul>
            </li>
            <li class="<?=($page_name == 'companies_add.php') ? 'active-page':'' ?>">
                <a href="companies_add.php"><i class="material-icons-two-tone">apartment</i>Companies</a>
            </li>
            <li class="<?=($page_name == 'skill_add.php') ? 'active-page':'' ?>">
                <a href="skill_add.php"><i class="material-icons-two-tone">sailing </i>Skills</a>
            </li>
            <li class="<?=($page_name == 'portfolio.php') ? 'active-page':'' ?>">
                <a href="portfolio.php"><i class="material-icons-two-tone">label_important</i>Portfolio</a>
            </li>
           
            <li class="<?=($page_name == 'settings.php' || $page_name == 'socialmedia_add.php') ? 'active-page':'' ?>">
                <a href=""><i class="material-icons-two-tone">settings_input_svideo </i>Settings<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a class="<?=($page_name == 'settings.php') ? 'active':'' ?>" href="settings.php">General Settings</a>
                    </li>
                    <li>
                        <a class="<?=($page_name == 'socialmedia_add.php') ? 'active':'' ?>" href="socialmedia_add.php">Social Media</a>
                    </li> 
                    <li>
                        <a class="<?=($page_name == 'logo_image_add.php') ? 'active':'' ?>" href="logo_image_add.php">Logo and Image</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=""><i class="material-icons-two-tone">star</i>Pages<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="#">Pricing</a>
                    </li>
                    <li>
                        <a href="#">Authentication<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">Sign In</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidebar-title">
                UI Elements
            </li>
            <li>
                <a href="#"><i class="material-icons-two-tone">widgets</i>Widgets</a>
            </li>
            <li>
                <a href="logout.php" class=" text-danger"><i class="material-icons-two-tone">logout</i>Logout</a>
            </li>
        </ul>
    </div>
</div>