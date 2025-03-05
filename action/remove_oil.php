<?php 	

require_once 'loader.php';


$valid['success'] = array('success' => false, 'messages' => array());

$oil_id =  $_GET['id'];

if($oil_id) { 

 $sql = "DELETE FROM oil_inventory  WHERE oil_id = {$oil_id}";

 if($connect->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";
	header('location:../manage_oil.php');		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove the user";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST