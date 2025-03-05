<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php include('./constant/connect.php');
$sql = "SELECT * FROM tanker_inventory";
$result = $connect->query($sql);
//echo $sql;exit;

?>
       <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> Manage Tanker</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Supplier</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                 <div class="card">
                            <div class="card-body">
                              
                            <a href="add_tanker.php"><button class="btn btn-primary">Add Tanker</button></a>
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th>#</th>
                                                <th>Fuel Type</th>
                                                <th>Action</th>
                                            </tr>
                                       </thead>
                                       <tbody>
                                        <?php
foreach ($result as $row) {

    $type= $row['fuel_type'];
    if($type == 1){
        $type = "Gasoline";
    }

    if($type == 2){
        $type = "Diesel";
    }
    ?>
                                        <tr>
                                            <td><?php echo $type; ?></td>
                                            <td><?php echo $row['quantity_litter'] ?></td>
                                          
                                            <td>
            
                                                <a href="edit_tanker_inv.php?id=<?php echo $row['tanker_id']?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i></button></a>
                                              

             
                                                <a href="action/remove_tanker.php?id=<?php echo $row['tanker_id']?>" ><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></button></a>
                                           
                                                
                                                </td>
                                        </tr>
                                      
                                    </tbody>
                                   <?php    
}
?>
                               </table>
                                </div>
                            </div>
                        </div>


<?php include('./constant/layout/footer.php');?>



