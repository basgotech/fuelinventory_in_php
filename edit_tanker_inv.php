<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?> 
<?php include('./constant/connect.php');



  $sql="SELECT * from tanker_inventory where  tanker_id='".$_GET['id']."'";
  $result=$connect->query($sql)->fetch_assoc();
  $type= $result['fuel_type'];
  if($type == 1){
      $type = "Gasoline";
  }

  if($type == 2){
      $type = "Diesel";
  }
  ?> 
 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Edit </h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Edit Tanker</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                <div class="row">
                    <div class="col-lg-8" style="    margin-left: 10%;">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div id="add-brand-messages"></div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST"  id="submitBrandForm" action="action/edit_tanker.php?id=<?php echo $_GET['id'];?>" enctype="multipart/form-data">


                                   <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Fuel Type</label>
                                                <div class="col-sm-9">
                                                  <input type="text"  class="form-control" id="fuel_type" placeholder="Quantity" name="fuel_type" value="<?php echo $type; ?>" required="" readonly/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Tanker Quantity</label>
                                                <div class="col-sm-9">
                                                  <input type="number"  class="form-control" id="quantity_liters" placeholder="Quantity" name="quantity_liters" value="<?php echo $result['quantity_litter']?>" required=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Price By liters</label>
                                                <div class="col-sm-9">
                                                  <input type="text"  class="form-control" id="price_by_lttr" placeholder="Price By liters" name="price_by_lttr" value="<?php echo $result['price_by_lttr']?>" required=""/>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <button type="submit" name="update_tanker" id="createBrandBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               



<?php include('./constant/layout/footer.php');?>



