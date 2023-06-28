<?php
include_once('index.php');
?>


<!-- Modal -->
<div class="modal bg-dark fade" id="deleteexpense<?= $ex['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="deleteexpense<?= $ex['id'] ?>Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #303743;">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-light" id="deleteexpense<?= $ex['id'] ?>Label">Delete Expense</h1>
                <button type="button" class="btn text-white shadow-none" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa fa-close"></i></button>
            </div>
            <div class="modal-body text-center">
Are you sure? 
                <a href="./my-pocket/remove.php?id=<?= $ex['id'] ?>" class="px-3 m-1 btn btn-danger">
                    <i class="fa fa-trash-can text-light"></i>
                    Yes
                </a>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>