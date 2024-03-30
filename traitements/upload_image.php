<?php
// Vérification de sélection d'un fichier
// Récupération des attributs du fichier (nom,type,taille)
if (!empty($_FILES)) {
    $image_nom=$_FILES['image']['name'];
    $image_type=$_FILES['image']['type'];
    $image_taille=$_FILES['image']['size'];
    $image_temporaire=$_FILES['image']['tmp_name'];
    $image_error=$_FILES['image']['error'];
} else {
    echo 'Vous devez sélectionner un fichier';
    exit;
}

// Vérification temporaire - A supprimer à la fin de l'exercice


// Début Vérification de la conformité
$affichage_erreurs='';
$erreurs=0;

// Test si pas d'erreur de sélection
if ($image_error == 0) {
    // Test de la taille du fichier
    if ($image_taille > 500000) {
        $affichage_erreurs .='La taille du fichier ne doit pas dépasser 500Ko <br>';
        $erreurs++;
    }

    // Test format du fichier avec la fonction exif_imagetype
    $image_type_valide = exif_imagetype($image_temporaire);
    if ($image_type_valide != IMAGETYPE_JPEG) {
        $affichage_erreurs .='Ce fichier n\'est pas une image jpeg<br>';
        $erreurs++;
    }
}
else{
    $affichage_erreurs .='Une erreur est survenue lors de la selection de l\'image. Veuillez recommencer. <br>';
    $erreurs++;
}

// On affiche les erreurs
if ($erreurs != 0) {
    echo $affichage_erreurs;
} else {
    echo 'Téléchargement terminé avec succès<br>';
}
