<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?> 
<?php include('./constant/connect.php');



  $sql="SELECT * from oil_inventory where  oil_id='".$_GET['id']."'";
  $result=$connect->query($sql)->fetch_assoc();

  ?> 
 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Edit </h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Edit Oil</li>
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
                                    <form class="form-horizontal" method="POST"  id="submitBrandForm" action="action/edit_oil.php?id=<?php echo $_GET['id'];?>" enctype="multipart/form-data">


                                   <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Oil liter Type</label>
                                                <div class="col-sm-9">
                                                  <input type="text"  class="form-control" id="fuel_type" name="oil_type" value="<?php echo $result['oil_lit_type']?>" required="" readonly/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Oil Price</label>
                                                <div class="col-sm-9">
                                                  <input type="text"  class="form-control" id="oil_price" placeholder="oil price" name="oil_price" value="<?php echo $result['oil_price']?>" required=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Oil Amount</label>
                                                <div class="col-sm-9">
                                                  <input type="text"  class="form-control" id="quantity_liters" placeholder="Quantity" name="quantity_liters" value="<?php echo $result['amount']?>" required=""/>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <button type="submit" name="update_oil" id="createBrandBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               



<?php include('./constant/layout/footer.php');?>



