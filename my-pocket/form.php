<?php
include_once('index.php');
?>


<form action="./my-pocket/addpocket.php" method="POST" >

<div class="card mb-4 bg-dark text-light">
       <div class="card-body" style="min-height: 330px;">

            <div class="row">
                <div class="col-sm-4">
                    <p class="mb-0">Pocket Name</p>
                </div>
                <div class="col-sm-8">
                    <input class="form-control  bg-secondary text-light border-secondary" name="p_name" maxlength="50" type="text"
                    placeholder="Pocket name"    required>
                 
                </div>
            </div>
            <hr>
         <div class="row">
                <div class="col-sm-4">
                    <p class="mb-0">Starting On</p>
                </div>
                <div class="col-sm-8">

            
                    <input class="form-control  bg-secondary text-light border-secondary" placeholder="Category" name="p_category" maxlength="50" type="text" value="<?=date("d.m.Y")?>" required>
        
            </div>
        </div>
        <hr>
          
            <div class="row">
                <div class="col-sm-4">
                    <p class="mb-0">Add Income</p>
                </div>
                <div class="col-sm-8">
                    <input class="form-control   bg-secondary text-light border-secondary" type="number" placeholder="Income" name="p_income" maxlength="20" required
                        >

                </div>
            </div>
   <hr>
            <div class="row">
                <div class="col-sm-4">
                    <p class="mb-0">Status</p>
                </div>
                  <div class="col-sm-8">
<div class="form-check form-check-inline">
  <input class="activestatus form-check-input text-secondary" type="radio" name="status" id="inlineRadio1" value="active" checked required>
  <label class="form-check-label" for="inlineRadio1">Active</label>
</div>
<div class="form-check form-check-inline">
  <input class="closedstatus form-check-input" type="radio" name="status" id="inlineRadio2" value="closed" required>
  <label class="form-check-label" for="inlineRadio2">Closed</label>
</div>
</div>
   </div>


        </div>

    </div>

    <div class="card mb-2  bg-dark">
        <button type="submit" name="add-pocket" class="btn btn-dark shadow-none">Save Pocket</button>
    </div>
    <div class="card mb-2 bg-dark">
        <a href="./mypocket.php" class="btn btn-dark shadow-none">Cancel</a>
    </div>

</form>
