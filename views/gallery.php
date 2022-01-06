<?php
require '../controller/gallery-controller.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="../assets/lightbox.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>

<?php
if(isset($login)){ ?>
    <h1>allPIX</h1>
    <div class="gridImg">
        <?php
        foreach ($files as $fileName) { ?>
            <a href="<?= $fileName ?>" data-lightbox="roadtrip"><img class="img" src="<?= $fileName ?>" alt=""></a>
        <?php }
        ?>
    </div>

    <div class="link">
    <a href="dashboard.php">Dashboard</a>
    <a href="deconnection.php">Déconnexion</a>
    </div>
    <?php } else {
        header('Location: no-allowed.php');
    } ?>


<script src="../assets/lightbox-plus-jquery.js"></script>

</body>

</html>