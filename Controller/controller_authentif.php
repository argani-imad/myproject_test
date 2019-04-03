<?php

$Login = $_POST['username'];
$Passe =$_POST['password'];

include_once '../Model/Config/database.php';
$GLOBALS['bd'] = new Database();


$conx=$GLOBALS['bd']->SeConnecter($Login,$Passe);
 

if($conx==true){
 ?>
  <?php 

session_start();
$_SESSION['ard465yuhfml47ojvcf']=$Login;
$_SESSION['hkhynbd65189dgkpbvb']=$Passe;

// header("Location:.././View/menu.php");



 }else{

// echo "false";

 }
?>


