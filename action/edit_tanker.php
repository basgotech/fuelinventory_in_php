<?php 	

require_once 'loader.php';

//$valid['success'] = array('success' => false, 'messages' => array());
$id = $_GET['id'];
//echo $brandId;exit;
if($_POST) {	
    
	 $fuel_type = $_POST['fuel_type']; 
    $Quantity = $_POST['quantity_liters'];
	$price_by_lttr = $_POST['price_by_lttr'];


	$sql = "UPDATE tanker_inventory SET quantity_litter = '$Quantity' , price_by_lttr='$price_by_lttr' WHERE tanker_id = '$id'";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Updated";
		header('location:../manage_tanker.php');	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 
	$connect->close();

	echo json_encode($valid);
 
}