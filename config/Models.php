<?php
include "CRUD.php";
include "functions.php";

/*
Create new function whenever there is a new table
*/

function user() {
	$crud = new CRUD;
	$crud->table = "user";
	return $crud;
}

?>
