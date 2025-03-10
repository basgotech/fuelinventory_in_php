<?php 	

require_once 'loader.php';

//$valid['success'] = array('success' => false, 'messages' => array());
$id = $_GET['id'];
//echo $brandId;exit;
if($_POST) {	
    
	 $oil_type = $_POST['oil_type']; 
	 $oil_price = $_POST['oil_price']; 
    $quantity_liters = $_POST['quantity_liters']; 


	$sql = "UPDATE oil_inventory SET amount = '$quantity_liters' , oil_price = '$oil_price' WHERE oil_id = '$id'";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Updated";
		header('location:../manage_oil.php');	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 
	$connect->close();

	echo json_encode($valid);
 
}