<?php 
require_once('database/Database.php');
if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}
$db = new Database();
$orig = $_SESSION['origin'];

$sqlOrig = "SELECT *
			FROM origin
			WHERE match_id = ?;
";
$origin = $db->getRow($sqlOrig, [$orig]);



$db->Disconnect();