<body>

    <?php
    include_once('../partials/header.php');
    require_once('../back-end/connexion.php');

    $request = $db->query("SELECT * FROM patients");
    $patients = $request->fetchAll();

    ?>

    <main class="d-flex justify-content-center m-5 ">
        <h2>Liste des Patients</h2>
    </main>

    <div class="container-md">
        <table class="table table-info">
            <thead>
                <tr class="">
                    <th scope="col"></th>
                    <th scope="col">Prenom :</th>
                    <th scope="col">Nom :</th>
                    <th scope="col">Profils :</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($patients as $patient) { ?>
                    <tr>
                        <th scope="row"><?php echo $patient["id"] ?></th>
                        <td><?php echo $patient["lastname"] ?> </td>
                        <td><?php echo $patient["firstname"] ?></td>
                        <td><a href="./le-patient.php?id=<?=$patient["id"]?>">Profile</a></td>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
    include_once('../partials/footer.php');
    ?>

</body>

</html>