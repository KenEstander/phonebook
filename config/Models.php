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
function friend() {
	$crud = new CRUD;
	$crud->table = "friend";
	return $crud;
}
function menu() {
	$crud = new CRUD;
	$crud->table = "menu";
	return $crud;
}
function recipe() {
	$crud = new CRUD;
	$crud->table = "recipe";
	return $crud;
}
function comment() {
	$crud = new CRUD;
	$crud->table = "comment";
	return $crud;
}
?>
