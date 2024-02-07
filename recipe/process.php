<?php
session_start();
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

	case 'add-menu' :
		add_menu();
		break;

  case 'delete-menu' :
		delete_menu();
		break;

  case 'add-recipe' :
		add_recipe();
		break;

	case 'delete-ingredients' :
		delete_ingredients();
		break;


  default;

}
function add_menu()
{

  $model = menu();
  $model->obj["name"] = $_POST["name"];
  $model->create();

header('Location: index.php');
}
function delete_menu()
{

  $Id = $_GET["Id"];
  $model = menu();
  $model->delete("Id=$Id");

header('Location: index.php');
}

function add_recipe(){
  $menuId = $_GET["Id"];
  $model = recipe();
  $model->obj["ingredients"] = $_POST["name"];
  $model->obj["menuId"] = $menuId;
  $model->create();



header('Location: recipe.php?Id=' . $menuId);
}

function delete_ingredients()
{
	$menuId = $_GET["menuId"];
  $recipeId = $_GET["Id"];
  $model = recipe();
  $model->delete("Id=$recipeId");

header('Location: recipe.php?Id=' . $menuId);

}
