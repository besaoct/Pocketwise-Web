<!-- -----------------------------expense edit modal----------------------------------------------- -->
<?php
include_once('index.php');
?>

<div class="modal bg-dark fade" id="editexpense<?=$ex['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="editexpense<?=$ex['id'] ?>Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #303743;">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-light" id="editexpense<?= $ex['id'] ?>Label">Edit</h1>
                <button type="button" class="btn text-white shadow-none" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">

                <form action="./my-pocket/expense.php" method="POST">

                    <div class="card mb-4 bg-dark text-light">
                        <div class="card-body">

                            <input class="form-control  bg-secondary text-light border-secondary" name="exid"
                                type="hidden" value="<?= $ex['id'] ?>" required>


                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Title</p>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control  bg-secondary text-light border-secondary" name="cat"
                                        maxlength="50" type="text" placeholder="Expense title" 
                                        value="<?=$ex['category']?>"
                                        required>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Amount</p>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control  bg-secondary text-light border-secondary"
                                        placeholder="Add Amount" name="expense" maxlength="50" type="number"
                                       value="<?= $ex['amount'] ?>" 
                                        required>

                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="card mb-2  bg-dark">
                        <button type="submit" name="edit-expense" class="btn btn-dark shadow-none">Save changes</a>
                    </div>


                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>