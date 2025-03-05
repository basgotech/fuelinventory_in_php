<?php 	

require_once 'loader.php';
$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
extract($_POST);
  $fuel_type = $_POST['fuel_type']; 

  $sql = "SELECT * FROM tanker_inventory WHERE fuel_type = '$fuel_type'";
  $result = $connect->query($sql);

  if($result->num_rows == 0) {
  $sql = "INSERT INTO tanker_inventory (fuel_type) VALUES ('$fuel_type')";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";
					header('location:../manage_tanker.php');	
				} 
				else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the Tanker";
					header('location:../add_tanker.php');
				}	

	$connect->close();

	echo json_encode($valid);
			}
			else{
				header('location:../add_fuel_type.php');
			}
 
} 