<?php $title = "Service - Change your Service info"; ?>
<?php require_once "includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Message Box</h1>
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
                            <div class="mailbox-list col-md-12">
                                <?php
                                    $select_msg = "SELECT * FROM messages ORDER BY id DESC";
                                    $messages = mysqli_query($db_connect, $select_msg);
                                   // print_r($messages);
                                ?>
                                <form action="messege_select_delete.php" method="post">
                                    <?php if($messages->num_rows > 0): ?>
                                        <button type="submit" class="btn btn-danger">Delete Selected</button>
                                        <input class="select_all" type="checkbox" id="#select_all">select all</input>
                                    <?php endif;?>
                                <ul class="list-unstyled">
                                    <?php foreach($messages as $message): ?>
                                        <li class="mailbox-list-item">
                                            
                                            <div class="form-check form-check-inline" style="margin: 0 0 0 10px">
                                                <input class="form-check-input border-dark select_s" type="checkbox" name="name[]" value="<?=$message['id']?>">
                                            </div>
                                            <a href="read.php?id=<?= $message['id'] ?>" style="display:inline-block; padding-left: 0; ">
                                                <div class="mailbox-list-item-content">
                                                    <span class="mailbox-list-item-title">
                                                    <?= $message['name'] ?>
                                                    </span>
                                                    <p class="mailbox-list-item-text fw-light <?= ($message['read_status'] == 'unread')? "text-info fw-bold":"" ?>">
                                                    <?php echo substr($message['message'] ,0,100); ?>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                    
                                </ul>
                                
                                </form>
                                    <?php if($messages->num_rows == 0): ?>
                                     
                                    <div class="align-content-center text-center"> <h3 class=" pt-5 pb-5">Message Box is Empty</h3></div>
                                     <?php endif;?>
                                    </div>
                                    
                            </div>
                                <!-- <button type="submit">Delete Selected</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "includes/footer.php"; ?>

<script>
// a = document.getElementsByClassName('select_s')
// for(i=0, n=a.length;i<n;i++){
//   a[i].click()
// }

$(document).ready(function(){
        $('.select_all').click(function(){
        //    alert($(this).attr('id'))
        a = document.getElementsByClassName('select_s')
        b = document.getElementsByClassName('select_all')
            if (b[0].checked) {
                    for(i=0, n=a.length;i<n;i++){
                    if (!a[i].checked) {
                        a[i].click()
                    }
                }
            }else{
                for(i=0, n=a.length;i<n;i++){
           
                a[i].click()
            }
            }
        

        });
    });
</script>