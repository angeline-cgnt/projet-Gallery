<?php
require '../controller/dashboard-controller.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>

<?php
if(isset($login)){ ?>
    <h1>allPIX</h1>
    <h2>Bonjour <?= $_SESSION['login'] ?></h2>
    <p class="quota">Quota: <?= $quotaUsed ?> / <?= $_SESSION['quota'] ?> Mo</p>
    <p class="totImg">Total image(s) : <?= $countFiles ?> </p>

    
    <div class="formUpload">
        <p>Veuillez choisir une image</p>
        <form action="dashboard.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input class="button" type="submit" name="send" value="UPLOAD">
        </form>
    </div>

    <p class="comment"><?= $msg ?? '' ?></p>
    <img id="preview">
    
    <a class="linkGallery" href="gallery.php"><button class="button">GALLERY</button></a>
    
    <div class="userLogOut"><a href="deconnection.php">Déconnexion</a></div>

    <?php } else {
        header('Location: no-allowed.php');
    } ?>


    <script src="../assets/uploadPreview.js"></script>


</body>

</html>