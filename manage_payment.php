<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php include('./constant/connect.php');
$sql = "SELECT * FROM payment";
$result = $connect->query($sql);
//echo $sql;exit;

?>
       <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> Manage Payment Methods</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View payment</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                 <div class="card">
                            <div class="card-body">
                              
                            <a href="add_payment.php"><button class="btn btn-primary">Add Payment</button></a>
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Payment ID</th>
                                                <th>Payment Methods</th>
                                                <th>Action</th>
                                            </tr>
                                       </thead>
                                       <tbody>
                                        <?php
foreach ($result as $row) {


    ?>
                                        <tr>
                                            <td><?php echo $row['pay_id'];?></td>
                                            <td><?php echo $row['pay_method'] ?></td>
                                          
                                            <td>
            
                                                <a href="edit_payment.php?id=<?php echo $row['pay_id']?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i></button></a>
                                              

             
                                                <a href="action/remove_payment.php?id=<?php echo $row['pay_id']?>" ><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></button></a>
                                           
                                                
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



