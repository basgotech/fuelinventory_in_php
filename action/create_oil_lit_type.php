<?php 	

require_once 'loader.php';
$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
extract($_POST);
  $oil_type = $_POST['oil_type']; 

  $sql = "INSERT INTO oil_inventory (oil_lit_type,amount) VALUES ('$oil_type','0')";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";
					header('location:../manage_oil.php');	
				} 
				else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the Tanker";
					header('location:../add_oil_type.php');
				}	

	$connect->close();

	echo json_encode($valid);
 
} 