<?php
$page="mp";
include "./includes/head.php";
include "./includes/function.php";
include "./includes/search.php";
if (!isset($_SESSION['uname'])) {
    header('location:./login');
}
$mp = getActivePocket($db);
$ax = getAllExpense($db);
$allpo = getAllPocketsOfOne($db);
$acEx = getAllacExpense($db);



?>
<div class="row">
    <div class="col-lg-4">
        <div class="card mb-4 bg-dark">
            <div class="card-body text-center" style="min-height: 320px;">
         <div>
            <a href="<?=BASE_URL?>/mypocket.php/?activepocket" type="button" class="btn btn-outline-light p-5 mb-4 w-100">View Pocket</a>
        </div>
        
         <div>
            <a href="<?=BASE_URL?>/mypocket.php/?create-new" type="button" class="btn btn-outline-light p-5  w-100 mb-4 ">Create New</a>
        </div>


  <div>
              <a href="<?=BASE_URL?>/mypocket.php/?manage-pockets"type="button" class="btn btn-outline-light p-5 w-100">Manage Pockets</a>
</div>

            </div>
        </div>
     
    
    </div>
    <div class="col-lg-8">
     
            <?php
            include "./my-pocket/manage.php";
            ?>

 
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
<?php
if (isset($_GET['activepocket'] ) || isset($thisactivepage)) {
    include "./my-pocket/extable.php";
}else{
    echo "";
}
?>

    </div>
</div>

</div>



</section>
<?php
include "./includes/footer.php"
    ?>