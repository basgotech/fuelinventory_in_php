<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>  

<?php
$sql = "SELECT * FROM oil_inventory";
$result = $connect->query($sql);

?>
<div class="page-wrapper">

<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Add Oil</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Add Oil</li>
</ol>
</div>
</div>


<div class="container-fluid">




<div class="row">
<div class="col-lg-8" style="margin-left: 10%;">
<div class="card">
<div class="card-title">

</div>
<div id="add-brand-messages"></div>
<div class="card-body">
<div class="input-states">
<form class="form-horizontal" method="POST"  id="submitProductForm" action="action/create_oil_inv.php" method="POST" enctype="multipart/form-data">


<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Oil Litter Type</label>
<div class="col-sm-9">
<select class="form-control" id="oil_lit_type" name="oil_lit_type">
    <?php
    foreach ($result as $row) {

        if($row['oil_lit_type'] == 1){
            $ltt = "Litter";
        }else{
            $ltt = "Litters";
        }
        ?>
              
<option value="<?php echo $row['oil_lit_type'];?> "><?php echo $row['oil_lit_type'];?> <?php echo $ltt; ?></option>

<?php  } ?>
</select></div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Quantity</label>
<div class="col-sm-9">
<input type="number" class="form-control" id="" placeholder="" name="quantity_amount" autocomplete="off" required="" />

</div>
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



