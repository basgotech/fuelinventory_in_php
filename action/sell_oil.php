<?php 	

require_once 'loader.php';
$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
extract($_POST);
$today = new DateTime();
$type = 2;
  $oil_lit_type = $_POST['oil_lit_type']; 

  $price_fuel = "SELECT * FROM oil_inventory WHERE oil_lit_type = '$oil_lit_type' ";
$query_oil_price = $connect->query($price_fuel);
$get_val = $query_oil_price->fetch_assoc();
$select_val = $get_val['oil_price'];
$select_quantity = $get_val['amount'];

  $amount_by_lttr = $_POST['amount_by_lttr']; 
  $pay_method = $_POST['pay_method'];
  $day = $today->format("j");
  $week = $today->format("w");
  $month = $today->format("n");
  $year = $today->format("y");
  $total_price = $amount_by_lttr*$select_val;


  //update tank inventory
  
$actual_quantity = $select_quantity-$amount_by_lttr;

$sql_ = "INSERT INTO transactions (fuel_type,quantity_liters,single_price,total_price,payed_by,day,week,month,year,type) VALUES ('$oil_lit_type','$amount_by_lttr','$select_val','$total_price','$pay_method','$day','$week','$month','$year','$type')";
$connect->query($sql_);
	$sql_tanker_update = "UPDATE oil_inventory SET amount = '$actual_quantity' WHERE oil_lit_type = '$oil_lit_type'";


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
 
