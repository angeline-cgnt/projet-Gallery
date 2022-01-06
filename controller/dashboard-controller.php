<?php
require_once '../my-config.php';
$arrayMsg = [];

$id = uniqid();

session_start();
$login = $_SESSION['login'];

$quota = 0;

// Uploader une image
if (isset($_FILES['fileToUpload'])) {
    $tmpName = $_FILES['fileToUpload']['tmp_name'];
    $name = $_FILES['fileToUpload']['name'];
    $size = $_FILES['fileToUpload']['size'];
    $type = $_FILES['fileToUpload']['type'];
    $error = $_FILES['fileToUpload']['error'];
    $ext = substr(strrchr($type, '/'), 1);

    if ($error == 0) {
        $typeImg = getimagesize($tmpName);

        if ($typeImg !== false && in_array($ext, $arrayExt)) {
            if ($size < $maxSize) {
                move_uploaded_file($tmpName, "../img/$login-$id-$name");
                $arrayMsg['msg'] = 'Fichier ajouté';
            } else {
                $arrayMsg['msg'] = 'Fichier trop volumineux. Veuillez en choisir un autre.';
            }
        } else {
            $arrayMsg['msg'] = 'Format de fichier non valide. Veuilez choisir une image au format jpg, jpeg, png ou gif.';
        }
    } 
}

// Nombre de fichiers dans le dossier img et quota utilisé
$files = glob("../img/$login*.*");

$countFiles = count($files);

foreach($files as $filename){
   $quota += filesize($filename);
}

$quotaUsed = round($quota / 1000000, 2);
