<?php


if (
    isset($_POST["nom"]) && !empty($_POST["nom"]) &&
    isset($_POST["prenom"]) && !empty($_POST["prenom"]) &&
    isset($_POST["date"]) && !empty($_POST["date"]) &&
    isset($_POST["tel"]) && !empty($_POST["tel"]) &&
    isset($_POST["email"]) && !empty($_POST["email"])
){    
    
}else {
    echo'elle est ou la poulette !!';
}

require_once('../back-end/connexion.php');

$request=$db->prepare("INSERT INTO patients (lastname ,firstname ,birthdate ,phone ,mail)
 VALUES(:lastname, :firstname, :birthdate, :phone, :mail)");

$request->execute([

    'lastname' =>$_POST["nom"],
    'firstname'=>$_POST["prenom"],
    'birthdate'=>$_POST["date"],
    'phone'    =>$_POST["tel"],
    'mail'     =>$_POST["email"],


]);


header("Location: ../front-end/liste-patients.php");