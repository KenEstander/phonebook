<?php
session_start();
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

	case 'log-in' :
		log_in();
		break;

  case 'add-friend' :
    add_friend();
    break;


  case 'add-menu' :
    add_menu();
    break;


  case 'delete-ingredients' :
    delete_ingredients();
    break;



	case 'add-recipe' :
		add_recipe();
		break;

	case 'delete-recipe' :
		delete_recipe();
		break;

		case 'un-friend' :
	    un_friend();
	  	break;

		case 'add-comment' :
	    add_comment();
	  	break;


	  case 'user-reply' :
	    user_reply();
	    break;


		default;

}

function log_in()
{
  $name = $_POST["name"];
  $password = $_POST["password"];

  $countContacts = contact()->count("name='$name' and password='$password'");
  if ($countContacts == 0) {
header('Location: login.php?error=You entered a non-existing account');
  }
  if ($countContacts == 1) {
  $_SESSION["loggedInUser"] = $name;
  header('Location: home.php');
  }

}

function add_friend()
{
  $loggedInUser = $_SESSION["loggedInUser"];
  $contact = contact()->get("name='$loggedInUser'");
  $friendId = $_GET["Id"];
  $model = friend();
  $model->obj["myId"] = $contact->Id;
  $model->obj["friendId"] = $friendId;
  $model->create();



header('Location: add-friend.php?success=You have successfully added a new friend');
}

function add_menu()
{

	$loggedInUser = $_SESSION["loggedInUser"];
  $contact = contact()->get("name='$loggedInUser'");
  $menuId = $_GET["Id"];
	$image = uploadFile($_FILES["image"]);
	$userId = $_GET["userId"];
  $model = menu();
	$model->obj["image"] = $image;
	$model->obj["name"] = $_POST["name"];
	$model->obj["userId"] = $contact->Id;
  $model->create();



header('Location: my-menu.php?Id='. $userId);
}

function delete_ingredients()
{

  $menuId = $_GET["Id"];
	$userId = $_GET["userId"];
  $model = menu();

  $model->delete("Id=$menuId");

header('Location: my-menu.php?Id=' . $userId);

}

function add_recipe()
{
  $menuId = $_GET["Id"];
  $model = recipe();
  $model->obj["ingredients"] = $_POST["name"];
  $model->obj["menuId"] = $menuId;
  $model->create();



header('Location: view-ingredients.php?Id=' . $menuId);
}

function delete_recipe()
{
	$menuId = $_GET["menuId"];
  $recipeId = $_GET["Id"];
  $model = recipe();
  $model->delete("Id=$recipeId");

header('Location: view-ingredients.php?Id=' . $menuId);

}

function un_friend()
{
	$userId = $_GET["userId"];
	$unfriend = $_GET["Id"];
  $model = friend();
  $model->delete("Id=$unfriend");

header('Location: my-friend.php?Id=' . $userId);

}

function add_comment()
{

	$loggedInUser = $_SESSION["loggedInUser"];
	$contact = contact()->get("name='$loggedInUser'");
	$menuId = $_GET["menuId"];
  $friendId = $_GET["friendId"];
  $model = comment();
	$model->obj["userId"] = $contact->Id;
  $model->obj["menuId"] = $menuId;
	$model->obj["content"] = $_POST["comments"];
  $model->create();



header('Location: view-friend-ingredients.php?friendId=' . $friendId . '&menuId=' . $menuId);
}

function user_reply()
{

	$loggedInUser = $_SESSION["loggedInUser"];
	$contact = contact()->get("name='$loggedInUser'");
	$menuId = $_GET["menuId"];
  $model = comment();
	$model->obj["userId"] = $contact->Id;
  $model->obj["menuId"] = $menuId;
	$model->obj["content"] = $_POST["comments"];
  $model->create();



header('Location: view-ingredients.php?Id='. $menuId);
}
