<?php
include "CRUD.php";
include "functions.php";

/*
Create new function whenever there is a new table
*/

function contact() {
	$crud = new CRUD;
	$crud->table = "contact";
	return $crud;
}

?>
