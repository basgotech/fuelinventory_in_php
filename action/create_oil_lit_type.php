<?php 	

require_once 'loader.php';
$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
extract($_POST);
  $oil_type = $_POST['oil_type']; 

  $sql = "SELECT * FROM oil_inventory WHERE oil_lit_type = '$oil_type'";
  $result = $connect->query($sql);

  if($result->num_rows == 0) {

  $sql = "INSERT INTO oil_inventory (oil_lit_type,amount) VALUES ('$oil_type','0')";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";
					header('location:../manage_oil.php');	
				} 
				else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the Oil";
					header('location:../add_oil_type.php');
				}	

	$connect->close();

	echo json_encode($valid);

			}else{
				header('location:../add_oil_type.php');
			}
 
} 