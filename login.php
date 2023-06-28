<?php
include "./includes/head.php";
include "./includes/loginlogic.php"
    ?>
    <style>
        .logreg{
            background-color: transparent!important;
        }
    </style>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
                        <div class="card  mb-4 bg-dark text-light">

                            <div class="card-body">
                               <div class="row">
                                 <div class="col-sm-12">
                                        <input class="form-control" name="email" maxlength="100" type="email" required
                                            value="" placeholder="Email">
                                  </div>
                                </div>
                                <hr>
                               <div class="row">
                                 <div class="col-sm-12">
                                       <input class="form-control" name="pass" maxlength="20" type="password" required placeholder="Password" value="">
                                 </div>
                             </div>
                            </div>

                        </div>

                        <div class="card mb-2  bg-dark">
                            <button type="submit" name="login" class="btn btn-dark shadow-none">Login</a>
                        </div>
                        <div class="card mb-4 bg-dark">
                            <a href="./reg" class="btn btn-dark shadow-none">Register Here</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
<?php
include "./includes/footer.php"
?>