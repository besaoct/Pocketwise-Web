<?php
include "./includes/head.php";
include "./includes/function.php";
if (!isset($_SESSION['uname'])) {
    header('location:./login');
}
$u = getUser($db);
?>
<?php
include "./includes/search.php";
?>

<div class="row">
    <div class="col-lg-4">
        <div class="card mb-4 bg-dark">
            <div class="card-body text-center" style="height: 220px;">
                <img src="avatar.png" alt="avatar" class="rounded-circle img-fluid mb-4 mt-3" style="width: 80px;">
                <h5 class="my-3 text-light text-uppercase">
                    <?= $u['name'] ?>
                </h5>
             
            </div>
        </div>

        <div class="card mb-2 bg-dark">
            <a href="./logout.php" class="btn btn-dark shadow-none">Log Out</a>
        </div>
        <div class="card mb-2 bg-dark">
            <a href="./" class="btn btn-dark shadow-none">Go to Home</a>
        </div>
    </div>

    <div class="col-lg-8" >
        <form action="./includes/edit.php" method="POST">
            <div class="card mb-4 bg-dark text-light" style="height: 220px;">

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control bg-secondary text-light border-secondary" name="name" maxlength="120" type="text"
                                value="<?= $u['name'] ?>" required>
                            <input class="form-control  bg-secondarytext-light border-secondary" name="id" maxlength="120" type="hidden" value="<?=
                                $u['id'] ?>" required>

                        </div>
                    </div>
                    <hr>
           
                 
                   
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control  bg-secondary text-light border-secondary" name="email" maxlength="120" type="email" required
                                value="<?= $u['email'] ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Phone</p>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control  bg-secondary text-light border-secondary" type="number" name="phone" maxlength="10" required
                                value="<?= $u['phone'] ?>">

                        </div>
                    </div>
               

                </div>

            </div>

            <div class="card mb-2  bg-dark">
                <button type="submit" name="updateP" class="btn btn-dark shadow-none">Save changes</a>
            </div>
            <div class="card mb-2 bg-dark">
                <a href="./" class="btn btn-dark shadow-none">Cancel</a>
            </div>

        </form>

    </div>
</div>
</div>
</section>
<?php
include "./includes/footer.php"
    ?>