<?php 	

require_once 'loader.php';
$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
extract($_POST);
  $oil_lit_type = $_POST['oil_lit_type']; 
  $quantity_amount = $_POST['quantity_amount'];

$oil_inv = "SELECT amount FROM oil_inventory WHERE oil_lit_type = $oil_lit_type";
$query_oil = $connect->query($oil_inv);
$query_oil_val = $query_oil->fetch_assoc();
$real_val = $query_oil_val['amount'];

$oil_added = $quantity_amount+$real_val;

$sql = "UPDATE oil_inventory SET amount = '$oil_added' WHERE oil_lit_type = $oil_lit_type ";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";
					header('location:../manage_oil.php');	
				} 
				else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members";
					header('location:../add_oil.php');
				}	

	$connect->close();

	echo json_encode($valid);
 
} 