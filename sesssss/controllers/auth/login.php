<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Include DB, Validator
  require "validator.php";
  require "Database.php";
  $config = require "config.php";
  $db = new Database($config);
$errors = [];

 $query = "SELECT * FROM users 
        WHERE email = :email ";
  $params = [
      ":email" => $_POST["email"],
  ];
  $user = $db->execute($query, $params)->fetch();
 if( $user && password_verify($_POST["password"], $user["password"])) {
$_SESSION["user"] = $user["email"];
 } else {
$errors["email"] = "invalid email or password";
 }
//   dd($user);
}
$title = "Login";
require "views/login.view.php";