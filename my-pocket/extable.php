
<?php
include_once('index.php');
?>

<link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 bg-dark text-light">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold">Expense Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                    <table class="table table-bordered  text-nowrap text-light" id="table_id"  cellspacing="0">
                              
                                   <thead >
                                        <tr >
                                            <th class="col-2">Serial number</th>
                                            <th class="col-4">Title</th>
                                            <th class="col-3">Amount</th>
                                            <th class="col-3">Action</th>
                                        
                                        </tr>
                                    </thead>
                                                     
                              <tbody ">

              <?php
         
              $sl_no = 1;
              foreach ($ax as $ex) {
                 
                      ?>
                                        <tr>
                                       <td><?= $sl_no++ ?></td>
                                       <td><?= $ex['category'] ?></td>
                                       <td>
                                         <?= $ex['amount'] ?>
                                      
                                        </td>
                                         <td>  
                                       <div class= "d-flex justify-content-around">
                                        <button
                                        data-bs-toggle="modal" 
                                        data-bs-target="#editexpense<?= $ex['id'] ?>" class="btn m-1 btn-secondary">
                                            <i class="fa fa-edit text-light" ></i>  
                                            Edit
                                        </button>
                                        <?php
                                        require('extablemodal.php')
                                            ?>
                                        <button
                                        data-bs-toggle="modal" 
                                        data-bs-target="#deleteexpense<?= $ex['id'] ?>" class="btn m-1 btn-danger">
                                            <i class="fa fa-trash text-light" ></i>  
                                            Delete
                                        </button>
                            <?php
                            require('etd.php')
                                ?>
                                             <button type="button" style="background-color: blueviolet;" class="px-3 m-1 btn shadow-none ttt text-light">
                                           <i class="fa-solid fa-circle-info text-light"></i>
                                           Info
                                           <span class="ttext text-light text-wrap">Created on 
                                            <?php
                                            $date = date_create($ex['time']);
                                            $dt = date_format($date, 'D, M d, Y');
                                            $time = date_format($date, 'H:m a');
                                            echo "$dt at $time";
                                            ?>
                                           </span>
                                           <div class="arrow-down"></div>
                                             </button>

           
                                             </div>

                                          </td>                    
                                        </tr>
                          <?php
             
                }
                          ?>
                     </tbody>
 
                                 <tfoot>
                                        <tr>
                                           <th>Serial number</th>
                                            <th>Title</th>
                                            <th>Amount</th>
                                            <th >Action</th>
                                     
                                        </tr>
                                    </tfoot> 
   
   
    </table>
     </div>
                        </div>
                    </div>

    <script type="text/javascript" charset="utf8"
        src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(function () {
            $("#table_id").dataTable(
                {
                    "lengthMenu": [ 5, 25, 50, 100 ]
                }
            )
             
        });
    </script>
