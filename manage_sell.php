<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php include('./constant/connect.php');
$sql = "SELECT * FROM transactions";
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
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Fuel Type</th>
                                                <th>Quantity Litters</th>
                                                <th>Price By Litters</th>
                                                <th>Total Price</th>
                                                <th>Payed by</th>
                                                <th>Transaction Date</th>
                                            </tr>
                                       </thead>
                                       <tbody>
                                        <?php
foreach ($result as $row) {
    $select_ = "SELECT * FROM payment WHERE pay_id = '{$row['payed_by']}' ";
    $qry_select = $connect->query($select_);
    $get_sele = $qry_select->fetch_assoc();
    $select_val = $get_sele['pay_method'];

    ?>
                                        <tr>
                                            <td><?php echo $row['fuel_type']; ?></td>
                                            <td><?php echo $row['quantity_liters'] ?></td>
                                            <td><?php echo $row['single_price'] ?></td>
                                            <td><?php echo $row['total_price'] ?></td>
                                            <td><?php echo $select_val ?></td>
                                            <td><?php echo $row['transaction_date'] ?></td>
                                          
                                           
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



