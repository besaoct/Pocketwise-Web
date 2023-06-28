<?php
include_once('index.php');
?>

<!-- -----------------------------edit modal----------------------------------------------- -->


<!-- Modal -->
<div class="modal bg-dark fade" id="editActivePocket" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editActivePocketLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #303743;">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-light" id="editActivePocketLabel">Edit</h1>
                <button type="button" class="btn text-white shadow-none" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">

                <form action="./my-pocket/edit.php" method="POST">

                    <div class="card mb-4 bg-dark text-light">
                        <div class="card-body" style="min-height: 330px;">

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Name</p>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control  bg-secondary text-light border-secondary" name="p_name" maxlength="50" type="text" placeholder="Pocket name" value="<?= $mp['p_name'] ?>" required>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Starting On</p>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control  bg-secondary text-light border-secondary" placeholder="Start-End Date" name="p_category" maxlength="50" type="text" value="<?= $mp['p_category'] ?>" required>

                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Income</p>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control   
                                    bg-secondary text-light border-secondary" type="number" placeholder="Income" name="p_income" maxlength="20" value="<?= $mp['p_income'] ?>" required>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Status</p>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-check form-check-inline">
                                        <input class="activestatus form-check-input text-secondary" type="radio" name="status" id="inlineRadio1" value="active" <?php if ($mp['status'] == "active") {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                } ?> required>
                                        <label class="form-check-label" for="inlineRadio1">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="closedstatus form-check-input" type="radio" name="status" id="inlineRadio2" value="closed" <?php if ($mp['status'] == "closed") {
                                                                                                                                                        echo "checked";
                                                                                                                                                    } ?> required>
                                        <label class="form-check-label" for="inlineRadio2">Closed</label>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                    <div class="card mb-2  bg-dark">
                        <button type="submit" name="up-pocket" class="btn btn-dark shadow-none">Save changes</button>
                    </div>


                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- -----------------------------expense modal----------------------------------------------- -->


<!-- Modal -->
<div class="modal bg-dark fade" id="addnewexpense" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addnewexpenseLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #303743;">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-light" id="addnewexpenseLabel">Add Expense</h1>
                <button type="button" class="btn text-white shadow-none" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">

                <form action="./my-pocket/expense.php" method="POST">

                    <div class="card mb-4 bg-dark text-light">
                        <div class="card-body" >

     <input class="form-control  bg-secondary text-light border-secondary" name="pid" type="hidden" 
  value="<?=$mp['p_id']?>" required>
 

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Title</p>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control  bg-secondary text-light border-secondary" name="cat" maxlength="50" type="text" placeholder="Expense title" required>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Amount</p>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control  bg-secondary text-light border-secondary" placeholder="Add Amount" name="expense" maxlength="50" type="number"  required>

                                </div>
                            </div>
                  
                   
                    
                        </div>

                    </div>

                    <div class="card mb-2  bg-dark">
                        <button type="submit" name="add-expense" class="btn btn-dark shadow-none">Click to Add</button>
                    </div>


                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
