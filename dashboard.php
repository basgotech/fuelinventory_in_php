<?php error_reporting(1); ?>
<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php 

// $sql = "SELECT * FROM oil_inventory WHERE fuel_type = 'Diesel' ";
// $query = $connect->query($sql);
// $countProduct = $query->num_rows;

// $orderSql = "SELECT * FROM orders WHERE order_status = 1";
// $orderQuery = $connect->query($orderSql);
// $countOrder = $orderQuery->num_rows;

// $totalRevenue = 0;

// while ($orderResult = $orderQuery->fetch_assoc()) {
//     //echo $orderResult['paid'];exit;
//     $totalRevenue += $orderResult['paid'];

// }

// $lowStockSql = "SELECT * FROM product WHERE quantity <= 3 AND status = 1";
// $lowStockQuery = $connect->query($lowStockSql);
// $countLowStock = $lowStockQuery->num_rows;

// $userwisesql = "SELECT tbl_client.name , SUM(orders.grand_total) as totalorder,order_id FROM orders INNER JOIN tbl_client ON orders.client_name = tbl_client.id WHERE orders.order_status = 1 GROUP BY orders.client_name";
// $userwiseQuery = $connect->query($userwisesql);
// $userwieseOrder = $userwiseQuery->num_rows;

// $connect->close();

?>
  
<style type="text/css">
    .ui-datepicker-calendar {
        display: none;
    }
</style>
        
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                   </div>
                
            </div>
            
            
            <div class="container-fluid">
                
                
        

                      <div class="row">
                        
                    <div class="col-md-3 dashboard">
                        <div class="card"  style="background: #2BC155">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="mdi mdi-gas-cylinder f-s-50"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                 
                            
                                    <h2 class="color-white"><?php echo 1; ?></h2>
                                    <a href="product.php"><p class="m-b-0">Total Cylinder</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                    <div class="col-md-3 dashboard">
                        <div class="card" style="background:#A02CFA ">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-user f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                                        


                            
                                    <h2 class="color-white"><?php echo 3 ?></h2>
                                     <a href="#"><p class="m-b-0">Total Suppliers</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php }?>
                   <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                     <div class="col-md-3 dashboard">
                        <div class="card" style="background-color: #F94687 ">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-vector f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    
                            <h2 class="color-white"><?php echo 3; ?></h2>
                                    <a href="Order.php"><p class="m-b-0">Total Booking</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                
        
 <div class="col-md-3 dashboard">
        <div class="card" style="background-color:#009688;">
            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-credit-card f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    
                            <h2 class="color-white">3</h2>
                                    <a href="Order.php"><p class="m-b-0">Total Revenue</p></a>
                                </div>
                            </div>

        

         
        </div> 

    </div>
                
            </div>
        </div>
    </div>

            
            <?php include ('./constant/layout/footer.php');?>
        <script>
        $(function(){
            $(".preloader").fadeOut();
        })
        </script>