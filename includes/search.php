
<?php
include('index.php');
?>


<div class="row">
    <div class="col">
        <nav aria-label="breadcrumb" class=" navbar-expand-lg rounded-3 p-3 mb-4 ">
        
        <div class="container-fluid">
        <div class="justify-content-center text-center text-light fs-4 fw-bold pb-4">
            Pocketwise

        </div>

 <div class="navbar-toggler text-light" >
         <!-- <span>Go To</span> -->
<div class="d-flex justify-content-center"  data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">    
<svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 17H8M12 17H20M4 12H20M4 7H12M16 7H20" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</div>

</div>

                <div class="collapse navbar-collapse  justify-content-center" id="navbarScroll" >
                    <ul class="navbar-nav navbar-nav-scroll ">
                   
                    <a href="./" class="nav-link text-light d-link text-center">    <li class="nav-item 
                      p-4 border me-2 ms-2 
                      rounded-3  
                      <?php if ($page == "home") {
                          echo "bg-dark";
                      }
                      ?> " 
                      style="min-width: 12rem;">
                            Home  
                           </li>
                        </a>
                            <a href="<?= BASE_URL; ?>/mypocket.php" class="nav-link text-light text-center ">
                        <li class="nav-item p-4 border me-2 ms-2 rounded-3
                           <?php if ($page == "mp") {
                               echo "bg-dark";
                           } ?>
                        
                        " style="min-width: 12rem;">
                            My Pocket
                        </li></a>
                        
                         <a href="<?= BASE_URL; ?>/shared-expense" class="nav-link text-light text-center">
                        <li class="nav-item p-4 border me-2 ms-2 rounded-3
                                            
                                               <?php if ($page == "se") {
                                                   echo "bg-dark";
                                               } ?>
                                             " style="min-width: 12rem;">

                           Shared Expense
                        </li></a>
                          
                        
                        <a href="<?= BASE_URL; ?>/helping-pocket" class="nav-link text-light text-center ">
                                      
                        <li class="nav-item p-4 border me-2 ms-2 rounded-3
                                              <?php if ($page == "hp") {
                                                  echo "bg-dark";
                                              } ?>
                                            " style="min-width: 12rem;">

                            Helping Pocket
                        </li></a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>




<div class="row">
    <div class="col">
        <nav aria-label="breadcrumb" class="bg-dark rounded-3 p-3 mb-4">
            <div>

                <form class="d-flex col-12 text-light" action="./search?" method="get">
                    <input class="form-control me-2  bg-secondary text-light border-secondary" type="search" name="q" placeholder="Search here" aria-label="Search">
                    <button class="btn btn-outline-light shadow-none" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</div>