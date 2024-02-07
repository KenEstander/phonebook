<?php
session_start();
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

	case 'add-contact' :
		add_contact();
		break;

    case 'edit-contact' :
  		edit_contact();
  		break;

    case 'delete-contact' :
  		delete_contact();
  		break;

default;
  }

  function add_contact()
{

		$model = contact();
		$model->obj["name"] = $_POST["name"];
		$model->obj["number"] = $_POST["number"];
  	$model->obj["birthday"] = $_POST["birthday"];
		$model->obj["gender"] = $_POST["gender"];
		$model->obj["password"] = $_POST["password"];

		$model->create();

	header('Location: index.php');
}

function edit_contact()
{

  $Id = $_GET["Id"];
  $model = contact();
  $model->obj["name"] = $_POST["name"];
  $model->obj["number"] = $_POST["number"];
  $model->obj["birthday"] = $_POST["birthday"];
	$model->obj["gender"] = $_POST["gender"];
	$model->obj["password"] = $_POST["password"];
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
