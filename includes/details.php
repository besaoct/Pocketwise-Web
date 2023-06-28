
<?php
include('index.php');
?>


<div class="card-body">
    <div class="row">
        <div class="col-sm-3">
            <p class="mb-0">Full Name</p>
        </div>
        <div class="col-sm-9">
            <p class="text-muted mb-0"><?= $u['name'] ?></p>        
        </div>
    </div>
    <hr>

 
    <div class="row">
        <div class="col-sm-3">
            <p class="mb-0">Email</p>
        </div>
        <div class="col-sm-9">
            <p class="text-muted mb-0">
          <?= $u['email'] ?>
            </p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <p class="mb-0">
           Phone
            </p>
        </div>
        <div class="col-sm-9">
            <p class="text-muted mb-0">
            <?= $u['phone'] ?>
            </p>
        </div>
    </div>
  


</div>