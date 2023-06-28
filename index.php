<?php
$page = "home";

include "./includes/head.php";
include "./includes/function.php";
include "./includes/search.php";

if(!isset($_SESSION['uname'])) {
    header('location:./login');
}
$u = getUser($db);
?>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4 bg-dark">
                        <div class="card-body text-center" style="height: 220px;">
                      
                            <img src="./avatar.png"
                                alt="avatar" class="rounded-circle mt-3 img-fluid" style="width: 80px;">
                            <h5 class="my-3 text-light text-uppercase"><?=$u['name']?></h5>
                       
                       <?php
                       if (isset($_SESSION['adname'])) {
                         
                       ?>
                            <p class="text-light mb-4"><a class="text-light" href="./admin">Admin Dashboard</a> 
                              </p>
                          
                            <?php
                       }
                            ?>
                        </div>
                    </div>
                  <div class="card mb-4 bg-dark">
                        <a href="./logout.php" class="btn btn-dark shadow-none">Log Out</a>
                  </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4 bg-dark text-light" style="height: 220px;">
                <?php
                include "./includes/details.php";
                ?>
    
                    </div>
                     <div class="card mb-4 bg-dark">
                         <a href="update" class="btn btn-dark shadow-none">Edit Details</a>
                     </div>
                
                </div>
            </div>
        </div>
    </section>
<?php
include "./includes/footer.php"
 ?>