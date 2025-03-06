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
                           
                                <li><a href="add_.php">Add Consumer</a></li>
                           
                                <li><a href="client.php">Manage Consumer</a></li>
                            </ul>
                        </li>
                
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Tanker</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                            <li><a href="add_fuel_type.php">Add Fuel Type</a></li>
                                <li><a href="add_tanker.php">Add Tanker</a></li>
                           
                                <li><a href="manage_tanker.php">Manage Tanker</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Oil</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add_oil_type.php">Add Oil Type</a></li>
                                <li><a href="add_oil.php">Add Oil</a></li>
                        
                                <li><a href="manage_oil.php">Manage Oil</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Payment Methods</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="add_payment.php">Add Payment</a></li>
                                <li><a href="manage_payment.php">Manage payments</a></li>
                            </ul>
                        </li>
                    <?php }?>
                
     

                  


    
                    </ul>   
                </nav>
                
            </div>
            
        </div>
        