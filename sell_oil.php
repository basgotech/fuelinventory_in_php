<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>  

<?php
$sql = "SELECT * FROM tanker_inventory";
$result = $connect->query($sql);


$sql_pay = "SELECT * FROM payment";
$result_payment = $connect->query($sql_pay);

?>
<div class="page-wrapper">

<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Sell Oil</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Sell Oil</li>
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
<form class="form-horizontal" method="POST"  id="submitProductForm" action="action/sell_oil.php" method="POST" enctype="multipart/form-data">


<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Oil Type</label>
<div class="col-sm-9">
<select class="form-control" id="fuel_type" name="fuel_type">
<?php
    foreach ($result as $row) {

        ?>
              
<option value="<?php echo $row['fuel_type'];?> "><?php echo $row['fuel_type'];?></option>

<?php  } ?>
</select></div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label"> Quantity</label>
<div class="col-sm-9">
<input type="number" class="form-control" id="" placeholder="" name="quantity_liters" autocomplete="off" required="" />

</div>
</div>
</div>


<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Payed By</label>
<div class="col-sm-9">
<select class="form-control" id="pay_method" name="pay_method">
<?php
    foreach ($result_payment as $row) {

        ?>
              
<option value="<?php echo $row['pay_id'];?> "><?php echo $row['pay_method'];?></option>

<?php  } ?>
</select></div>
</div>
</div>

<button type="submit" name="create" id="createProductBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
</form>
</div>
</div>
</div>
</div>

</div>





<?php include('./constant/layout/footer.php');?>



