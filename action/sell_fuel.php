<?php 	

require_once 'loader.php';
$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
extract($_POST);
$today = new DateTime();
$type = 1;
  $fuel_type = $_POST['fuel_type']; 

  $price_fuel = "SELECT * FROM tanker_inventory WHERE fuel_type = '$fuel_type' ";
$query_fuel_price = $connect->query($price_fuel);
$get_val = $query_fuel_price->fetch_assoc();
$select_val = $get_val['price_by_lttr'];
$select_quantity = $get_val['quantity_litter'];

  $quantity_liters = $_POST['quantity_liters']; 
  $pay_method = $_POST['pay_method'];
  $day = $today->format("j");
  $week = $today->format("w");
  $month = $today->format("n");
  $year = $today->format("y");
  $total_price = $quantity_liters*$select_val;


  //update tank inventory
  
$actual_quantity = $select_quantity-$quantity_liters;

$sql_ = "INSERT INTO transactions (fuel_type,quantity_liters,single_price,total_price,payed_by,day,week,month,year,type) VALUES ('$fuel_type','$quantity_liters','$select_val','$total_price','$pay_method','$day','$week','$month','$year','$type')";
$connect->query($sql_);
	$sql_tanker_update = "UPDATE tanker_inventory SET quantity_litter = '$actual_quantity' WHERE fuel_type = '$fuel_type'";


				if($connect->query($sql_tanker_update) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";
					header('location:../manage_sell.php');	
				} 
				else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the Tanker";
					header('location:../sell_fuel.php');
				}	

	$connect->close();

	echo json_encode($valid);
			}
			else{
				header('location:../add_fuel_type.php');
			}
 
