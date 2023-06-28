
<?php
include_once('index.php');
?>

<?php

$active_search = "SELECT * FROM myPockets where status='active' AND  p_mail='" . $_SESSION['email'] ."'";
$as = mysqli_query($db, $active_search);
$activecount = mysqli_num_rows($as);
$thisactivepage = true;
if ($activecount > 0) {
 
              $total_expense = 0;
              $sl_no = 1;
              foreach ($ax as $edx) {
                 $total_expense += $edx['amount'];
              } 
              
?>
<div class="card mb-4 bg-dark text-light">
    <div class="card-body " style="min-height: 330px;">

        <div class="row mb-2 mt-2">
            <div class="col-sm-4">
                <p class="mb-0">Pocket Name:</p>
            </div>
            <div class="col-sm-8 ">
                <input class="form-control bg-dark text-light border-secondary"    
                value="<?=$mp["p_name"]?>"
                disabled >
         
            </div>
        </div>
        <!-- <hr> -->
        <div class="row mb-2 mt-2">
            <div class="col-sm-4 ">
                <p class="mb-0">Start-End:</p>
            </div>
            <div class="col-sm-8">
                <input class="form-control bg-dark text-light border-secondary" 
                  value="<?= $mp["p_category"] ?> - <?= $mp["endtime"] ?>"
                disabled>

            </div>
        </div>
        <!-- <hr> -->

        <div class="row mb-2 mt-2">
            <div class="col-sm-4 ">
                <p class="mb-0">Total Income:</p>
            </div>
            <div class="col-sm-8">
                <input class="form-control bg-dark text-light border-secondary"
                  value="Rs. <?= $mp["p_income"] ?>"
                
                disabled>

            </div>
        </div>
        <div class="row mb-2 mt-2">
            <div class="col-sm-4">
                <p class="mb-0">Current Amount:</p>
            </div>
            <div class="col-sm-8">
                <input class="form-control text-light bg-dark border-secondary" 
                 value="Rs. <?=$mp["p_income"]-$total_expense?>"
                disabled>
            </div>
        </div>
        <div class="row mb-2 mt-2">
            <div class="col-sm-4 ">
                <p class="mb-0">Total Expense:</p>
            </div>
            <div class="col-sm-8">
                <input class="form-control text-light bg-dark border-secondary" 
               value="Rs. <?= $total_expense ?>"
                disabled>

            </div>
        </div>
        <hr>


        <div class="row">
            <div class="col-sm-12">
                <p class="mb-0">Status: <?= $mp["status"] ?></p>
            </div>
    
        </div>


    </div>

</div>

<div class="card mb-2  bg-dark">
    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#editActivePocket">
    Edit
</button>
</div>
<div class="card mb-2 bg-dark">
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addnewexpense">
 Add Expense
</button>
</div>

<?php

}else{

?>

<div class="d-flex justify-content-center  text-light text-center" style="padding:2rem">

<p>No Active Pockets Available</p>

</div>
<?php

}

?>


