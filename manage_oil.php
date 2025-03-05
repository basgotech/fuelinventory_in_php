<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php include('./constant/connect.php');
$sql = "SELECT * FROM oil_inventory";
$result = $connect->query($sql);
//echo $sql;exit;

?>
       <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> Manage Oil</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Oil</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                 <div class="card">
                            <div class="card-body">
                              
                            <a href="add_oil.php"><button class="btn btn-primary">Add Oil</button></a>
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Oil Type</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                       </thead>
                                       <tbody>
                                        <?php
foreach ($result as $row) {

    if($row['oil_lit_type'] == 1){
        $ltt = "Litter";
    }else{
        $ltt = "Litters";
    }
    ?>
                                        <tr>
                                            <td><?php echo $row['oil_lit_type'];?> <?php echo $ltt; ?></td>
                                            <td><?php echo $row['amount'] ?></td>
                                          
                                            <td>
            
                                                <a href="edit_oil_inv.php?id=<?php echo $row['oil_id']?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i></button></a>
                                              

             
                                                <a href="action/remove_oil.php?id=<?php echo $row['oil_id']?>" ><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></button></a>
                                           
                                                
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



