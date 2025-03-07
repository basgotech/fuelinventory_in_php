<?php 	

require_once 'loader.php';


$valid['success'] = array('success' => false, 'messages' => array());

$pay_id =  $_GET['id'];

if($pay_id) { 

 $sql = "DELETE FROM payment  WHERE pay_id = {$pay_id}";

 if($connect->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";
	header('location:../manage_payment.php');		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove the user";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST