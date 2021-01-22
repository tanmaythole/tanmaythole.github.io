<?php 
if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

if( isset($_POST['oid']) && isset($_POST['dd']) ){
	$origins = $_POST['oid'];
	$matchDate = $_POST['dd'];

	$_SESSION['origin'] = $origins;
	$_SESSION['departure_date'] = $matchDate;
	$_SESSION['tracker'] = uniqid();

	$return['url'] = 'accomodation.php';
	$return['valid'] = true;

	echo json_encode($return);
}//end isset