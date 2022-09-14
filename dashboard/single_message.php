<?php $title = "Service - Change your Service info"; ?>
<?php require_once "includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Message Body</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="mailbox-container">

                <!-- <div class="modal fade" id="composeModal" tabindex="-1" aria-labelledby="composeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="composeModalLabel">Compose Message</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <label for="composeEmailTo" class="form-label">Email address</label>
                                    <input type="email" class="form-control m-b-sm" id="composeEmailTo" aria-describedby="emailHelp">
                                    <label for="composeTitle" class="form-label">Subject</label>
                                    <input type="text" class="form-control m-b-lg" id="composeTitle" aria-describedby="title">
                                    <div id="compose-editor"></div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-success">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-burger mailbox-compose-btn" data-bs-toggle="modal" data-bs-target="#composeModal"><i class="material-icons-outlined">create</i></button>
                 -->
                <div class="card">
                    <div class="container-fluid">
                        <div class="row">
                            <?php
                                    $msg_id = $_GET['id'];
                                    $select_msg = "SELECT * FROM messages WHERE id=$msg_id";
                                    $messages = mysqli_fetch_assoc(mysqli_query($db_connect, $select_msg));
                                   // print_r($messages);
                            ?>
                            <div class="mailbox-open-content col-md-12">
                                <span class="mailbox-open-date">Jul 9, 2021, 9:07 AM</span>
                                <h5 class="mailbox-open-title">
                                    <? //= $messages['message']?>
                                    <?php echo substr($messages['message'] ,0,50); ?>
                                </h5>
                                <div class="mailbox-open-author">
                                    
                                    <div class="mailbox-open-author-info">
                                        <!-- <span class="mailbox-open-author-info-email d-block"> </span> -->
                                        <span class="mailbox-open-author-info-email d-block"> <?= $messages['email']?></span>
                                        <span class="mailbox-open-author-info-to">From <span class="badge badge-info align-self-center"><?= $messages['name']?></span></span>
                                    </div>
                                    <div class="mailbox-open-actions">
                                        <!-- <a href="#" class="btn btn-primary">Forward</a> -->
                                        <a href="delete_messege.php?id=<?=$messages['id']?>" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                                <div class="mailbox-open-content-email">
                                    <p>
                                    <?= $messages['message']?>
                                    </p>
                                    <div class="mailbox-open-content-email-attachments">
                                        <ul class="attachments-files-list list-unstyled">
                                            <li class="attachments-files-list-item">
                                                <span class="attachments-files-list-item-icon">
                                                    <i class="material-icons-outlined">insert_drive_file</i>
                                                </span>
                                                <span class="attachments-files-list-item-content">
                                                    <span class="attachments-files-list-item-title">Invoice.pdf</span>
                                                    <span class="attachments-files-list-item-size">14 MB</span>
                                                </span>
                                                <a href="#" class="attachments-files-list-item-download-btn">
                                                    <i class="material-icons-outlined">
                                                        download
                                                    </i>
                                                </a>
                                            </li>
                                            <li class="attachments-files-list-item">
                                                <span class="attachments-files-list-item-icon">
                                                    <i class="material-icons-outlined">lock</i>
                                                </span>
                                                <span class="attachments-files-list-item-content">
                                                    <span class="attachments-files-list-item-title">connect_download.zip</span>
                                                    <span class="attachments-files-list-item-size">95.4 MB</span>
                                                </span>
                                                <a href="#" class="attachments-files-list-item-download-btn">
                                                    <i class="material-icons-outlined">
                                                        download
                                                    </i>
                                                </a>
                                            </li>
                                            <li class="attachments-files-list-item">
                                                <span class="attachments-files-list-item-icon">
                                                    <i class="material-icons-outlined">image</i>
                                                </span>
                                                <span class="attachments-files-list-item-content">
                                                    <span class="attachments-files-list-item-title">welcome.jpeg</span>
                                                    <span class="attachments-files-list-item-size">46 MB</span>
                                                </span>
                                                <a href="#" class="attachments-files-list-item-download-btn">
                                                    <i class="material-icons-outlined">
                                                        download
                                                    </i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mailbox-open-content-reply">
                                    <div id="reply-editor"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "includes/footer.php"; ?>