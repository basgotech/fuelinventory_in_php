 <?php 
 include('./constant/connect.php');
  

 ?>

 
        <div class="left-sidebar">
            
            <div class="scroll-sidebar">
                
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i>Dashboard</a>
                        </li> 
                 
                         <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                             <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Consumer</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add_client.php">Add Consumer</a></li>
                           
                                <li><a href="client.php">Manage Consumer</a></li>
                            </ul>
                        </li>
                
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Supplier</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-brand.php">Add Supplier</a></li>
                           
                                <li><a href="brand.php">Manage Supplier</a></li>
                                 <li><a href="importbrand.php">Import Supplier</a></li>
                            </ul>
                        </li>
                    <?php }?>
                
     

                  


    
                    </ul>   
                </nav>
                
            </div>
            
        </div>
        