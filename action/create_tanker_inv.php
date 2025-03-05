<?php 	

require_once 'loader.php';
$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
extract($_POST);
  $fuel_type = $_POST['fuel_type']; 
  $quantity_liters = $_POST['quantity_liters'];

$tanker_inventory = "SELECT quantity_litter FROM tanker_inventory WHERE fuel_type = '$fuel_type' ";
$query_tanker = $connect->query($tanker_inventory);
$query_tanker_val = $query_tanker->fetch_assoc();
$real_val = $query_tanker_val['quantity_litter'];

$fuel_added = $quantity_liters+$real_val;

$sql = "UPDATE tanker_inventory SET quantity_litter = '$fuel_added' WHERE fuel_type = '$fuel_type' ";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";
					header('location:../manage_tanker.php');	
				} 
				else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members";
					header('location:../add_tanker.php');
				}	

	$connect->close();

	echo json_encode($valid);
 
} 