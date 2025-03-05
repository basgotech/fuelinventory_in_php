<?php 	

require_once 'loader.php';


$valid['success'] = array('success' => false, 'messages' => array());

$tanker_id =  $_GET['id'];

if($tanker_id) { 

 $sql = "DELETE FROM tanker_inventory  WHERE tanker_id = {$tanker_id}";

 if($connect->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";
	header('location:../manage_tanker.php');		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove the user";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST