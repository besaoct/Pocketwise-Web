<?php
include_once('index.php');
?>


<!-- Modal -->
<div class="modal  fade" id="mksa<?= $ep['p_id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="mksa<?= $ep['p_id'] ?>Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #303743;">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-light" id="mksa<?= $ep['p_id'] ?>Label">Change Status</h1>
                <button type="button" class="btn text-white shadow-none" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa fa-close"></i></button>
            </div>
            <div class="modal-body text-center">


                <form action="./my-pocket/uspocket.php" method="POST">

                    <div class="card mb-4 bg-dark text-light">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Status</p>
                                </div>
                                <div class="col-sm-8">
                                 <input type="hidden" name="id"  value="<?=$ep['p_id']?>"  required>
                                    <?php if ($ep['status'] == "active") {
                                        ?>  
                            <div class="form-check form-check-inline">
                                        <input class="activestatus form-check-input text-secondary" type="radio"
                                            name="status" id="inlineRadio1" value="closed" 
                                              checked
                                            required>
                                        <label class="form-check-label" for="inlineRadio1">Close</label>
                              </div>
                            <?php
                                     } else{
?>
       <div class="form-check form-check-inline">
                                        <input class="activestatus form-check-input text-secondary" type="radio"
                                            name="status" id="inlineRadio1" value="active" 
                                              checked
                                            required>
                                        <label class="form-check-label" for="inlineRadio1">Active</label>
                              </div>
                            <?php

                                     }
                                     
                                     ?>
                          
                          
                                </div>
                            </div>
                     
                        </div>
                 

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="uspocket" class="btn btn-secondary shadow-none">Save changes</button>

                        </div>
                    </div>
</form>

            </div>
        </div>
    </div>
</div>