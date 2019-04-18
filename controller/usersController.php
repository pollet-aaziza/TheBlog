<?php 
class userController
{

public function showAddUser(){
  if(!empty($_POST)){
    foreach ($_POST as $key => $value) {
      $_POST[$key] = htmlspecialchars($value);
    }
    $usersManager = new usersManager();
    $usersManager->addUsers($_POST);
    header("Location: loginView.php");
    exit;
  }
}

public function userLogin() {

if (!empty($_POST)) {
  
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }
  $userManager = new usersManager();
  $users = $userManager->getAllUsers();
  if ($userManager->getUserByName($_POST["name"])) {
    $user = $userManager->getUserByName($_POST["name"]);
    if ($_POST["password"] === $user["password"]) {
      session_start();
      $_SESSION["user"] = $user;
      if ($_SESSION["user"]["status"] === 1) {
        header("Location: ../admin/posts.php");
        exit;
      }
      elseif ($_SESSION["user"]["status"] === 0){
        header('Location: index.php');
        exit;
      }

    }
  }
}
require("views/loginView.php");
}

}

?>
