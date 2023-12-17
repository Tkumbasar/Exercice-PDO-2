
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body >
<?php
    include_once('/laragon/www/php-pdo/Exercice-PDO-2/partials/header.php');
?>
<main class="d-flex justify-content-center m-5 ">
    <h2>Inscriptions</h2>
</main>

<div class="d-flex justify-content-center m-5">

    <form action="../back-end/traitement.php" method="post" >

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
</div>
</body>
<?php
     include_once('/laragon/www/php-pdo/Exercice-PDO-2/partials/footer.php');
?>
</html>
