<?php
session_start();
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

	case 'add-user' :
		add_user();
		break;

  case 'delete-user' :
    delete_user();
    break;

  case 'edit-user' :
  edit_user();
  break;

	default :
}


function add_user()
{

    $model = contact();
    $model->obj["name"] = $_POST["name"];
    $model->obj["number"] = $_POST["number"];
    $model->obj["age"] = $_POST["age"];
    $model->create();

	header('Location: index.php');
}
