<?php 	

require_once 'loader.php';
$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
extract($_POST);
  $pay_method = $_POST['pay_method']; 

  $sql = "SELECT * FROM payment WHERE pay_method = '$pay_method'";
  $result = $connect->query($sql);

  if($result->num_rows == 0) {
  $sql = "INSERT INTO payment (pay_method) VALUES ('$pay_method')";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";
					header('location:../manage_payment.php');	
				} 
				else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the Tanker";
					header('location:../add_payment.php');
				}	

	$connect->close();

	echo json_encode($valid);
			}
			else{
				header('location:../add_payment.php');
			}
 
} 