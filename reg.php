<?php
include "./includes/head.php";
include "./includes/reglogic.php"
?>
<style>
.logreg{
      background-color: transparent!important;
  }
  </style>
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-5">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="POST">                       
                     <div class="card  mb-4 bg-dark text-light">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <input class="form-control" name="name" maxlength="50" type="text" placeholder="Name" required>

                                    </div>
                                </div>
                                <hr>
                                <!-- <div class="row">

                                    <div class="col-sm-12">
                                        <input class="form-control" name="eno" maxlength="100" type="text" required
                                            placeholder="Enrollment Number">
                                    </div>
                                </div> -->
                                <!-- <hr> -->
                       
                                <hr>
                                <div class="row">

                                    <div class="col-sm-12">
                                        <input class="form-control" name="email" maxlength="50" type="email" required
                                             placeholder="Email">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">

                                    <div class="col-sm-12">
                                        <input class="form-control" type="number" name="phone" maxlength="10" required
                                            value="" placeholder="Phone">

                                    </div>
                                </div>
                                <hr>
                         
                               
                                <div class="row">

                                    <div class="col-sm-12">
                                        <input class="form-control" name="pass" maxlength="20" type="password" required
                                            placeholder="Password" >

                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="form-control" name="cpass" maxlength="20" type="password" required
                                            placeholder="Confirm Password" >
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card mb-2  bg-dark">
                            <button type="submit" name="reg" class="btn btn-dark shadow-none">Register</a>
                        </div>
                        <div class="card mb-4 bg-dark">
                            <a href="./login" class="btn btn-dark shadow-none">Login here</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
<?php
include "./includes/footer.php"
?>