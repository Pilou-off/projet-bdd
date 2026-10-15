<?php
$host_name = "localhost";
$database = "boulangerie";
$user_name = "root";
$password = "";
try {
  $bdd = new PDO('mysql:host=' . $host_name . ';dbname=' . $database . ';charset=utf8', $user_name, $password);
} catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}
?>
