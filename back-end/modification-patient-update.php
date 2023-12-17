<?php 
require_once('../back-end/connexion.php');

$sql = ("UPDATE patients SET lastname = ?, firstname = ?, birthdate = ?, phone = ?, mail = ? WHERE id = ?");

$result = $db->prepare($sql);
$result ->execute(array
    ($_POST["nom"],
    $_POST["prenom"],
    $_POST["date"],
    $_POST["tel"],
    $_POST["email"],
    $_GET['id']));




header('Location: ../front-end/index.php')
?>
