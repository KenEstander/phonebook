<?php
session_start();
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

	case 'add-contact' :
		add_contact();
		break;

	case 'delete-contact' :
		delete_contact();
		break;

	case 'edit-contact' :
		edit_contact();
		break;


	default :
}


function add_contact()
{

    $model = contact();
    $model->obj["name"] = $_POST["name"];
    $model->obj["number"] = $_POST["number"];
    $model->obj["age"] = $_POST["age"];
    $model->create();

	header('Location: index.php');
}

function edit_contact()
{


		$Id = $_GET["Id"];

    $model = contact();
    $model->obj["name"] = $_POST["name"];
    $model->obj["number"] = $_POST["number"];
    $model->obj["age"] = $_POST["age"];
    $model->update("Id=$Id");

	header('Location: index.php');
}

function delete_contact()
{

		$Id = $_GET["Id"];

    $model = contact();
    $model->delete("Id=$Id");

	header('Location: index.php');
}
