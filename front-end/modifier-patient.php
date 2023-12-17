<?php
include_once('../partials/header.php');
require_once('../back-end/connexion.php');

$userID = $_GET['id'];
$sql1 = 'SELECT * FROM patients WHERE id=' . $userID . '';


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main class="d-flex justify-content-center m-5 ">
        <h2>Modifications</h2>
    </main>
    
    <form action="../back-end/modification-patient-update.php?id=<?=$userID?>" method="post">

        <label for="text">lastname</label>
        <input type="text" name="nom" id="">
        <br>

        <label for="text">firstname</label>
        <input type="text" name="prenom" id="">
        <br>

        <label for="date">birthday</label>
        <input type="date" name="date" id="">
        <br>

        <label for="tel">phone</label>
        <input type="tel" name="tel" id="">
        <br>

        <label for="email">email</label>
        <input type="email" name="email" id="">
        <br>

        <button type="submit">Valider</button>

    </form>
</body>

</html>



<?php
include_once('../partials/footer.php');
?>