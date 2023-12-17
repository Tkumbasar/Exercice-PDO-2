<?php
include_once('../partials/header.php');
require_once('../back-end/connexion.php');

$request = $db->prepare('SELECT * FROM `patients`WHERE id=?');
$request->execute([$_GET["id"]]);
$patients = $request->fetchAll();
// var_dump($patients)
?>

<main class="d-flex justify-content-center m-5 ">
    <h2>Patients</h2>
</main>

<div class="container-md">
    <table class="table table-info">
        <thead>
            <tr class="">
                <th scope="col"></th>
                <th scope="col">Prenom :</th>
                <th scope="col">Nom :</th>
                <th scope="col">Date de naissance :</th>
                <th scope="col">Tel :</th>
                <th scope="col">Email :</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($patients as $patient) { ?>
                <tr>
                    <th> <?php echo $patient["id"] ?></th>
                    <td> <?php echo $patient["lastname"] ?></td>
                    <td> <?php echo $patient["firstname"] ?></td>
                    <td> <?php echo $patient["birthdate"] ?></td>
                    <td> <?php echo $patient["phone"] ?></td>
                    <td><?php echo $patient["mail"] ?></td>
                    <td><a href="./modifier-patient.php?id=<?= $patient["id"] ?>">Modifications</a></td>

                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>
<?php
include_once('../partials/footer.php');
?>

</body>

</html>