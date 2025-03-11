<?php error_reporting(1); ?>
<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php 

$sql = "SELECT * FROM tanker_inventory WHERE fuel_type = 'Diesel' ";
$query = $connect->query($sql);
$row = $query->fetch_assoc();
$countDiesel = $row['quantity_litter'];


$sql = "SELECT * FROM tanker_inventory WHERE fuel_type = 'Gasoline' ";
$query = $connect->query($sql);
$row = $query->fetch_assoc();
$countGasoline = $row['quantity_litter'];

$sql = "SELECT * FROM tanker_inventory WHERE fuel_type = 'Benzin' ";
$query = $connect->query($sql);
$row = $query->fetch_assoc();
$countBenzin = $row['quantity_litter'];


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
                        
                    <div class="col-md-4 dashboard">
                        <div class="card"  style="background: #2BC155">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="mdi mdi-gas-cylinder f-s-50"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                 
                            
                                    <h2 class="color-white"><?php echo $countDiesel." Litters"; ?></h2>
                                    <a href="product.php"><p class="m-b-0">Total Diesel</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                    <div class="col-md-4 dashboard">
                        <div class="card" style="background:#A02CFA ">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                <span><i class="mdi mdi-gas-cylinder f-s-50"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                <h2 class="color-white"><?php echo $countGasoline." Litters"; ?></h2>
                                     <a href="#"><p class="m-b-0">Total Gasoline</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php }?>
                   <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                     <div class="col-md-4 dashboard">
                        <div class="card" style="background-color: #F94687 ">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                <span><i class="mdi mdi-gas-cylinder f-s-50"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    
                                <h2 class="color-white"><?php echo $countBenzin." Litters"; ?></h2>
                                    <a href="Order.php"><p class="m-b-0">Total Benzin</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                
        

                
            </div>
        </div>
     </div>

            
            <?php include ('./constant/layout/footer.php');?>
        <script>
        $(function(){
            $(".preloader").fadeOut();
        })
        </script>