<?php
session_start();
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

	case 'record-add' :
		record_add();
		break;

	default :
}

function delete_records(){
	$userId = $_GET["userId"];
	record()->delete("userId=$userId");

	header('Location: delete-reset.php?success=You have successfully deleted all records');
}
