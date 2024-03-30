<?php
// Vérification de l'appel via le formulaire
if (count($_POST) == 0) {
  // Si le le tableau est vide, on affiche le formulaire
  header('location: ../contact.php');
}

// Vérification des données du formulaire

$affichage_retour = '';                            // Lignes à ajouter au début des vérifications
$erreurs = 0;

// Exemple pour le nom
if (!empty($_POST['nom'])) {
  $nom = $_POST['nom'];
} else {
  // header('location: contact.php'); 									// Ligne à remplacer
  $affichage_retour .= 'Le champ NOM est obligatoire<br>';
  $erreurs++;
}



// Exemple pour l'adresse mail
if (!empty($_POST['email'])) {
  // Si le champ email contient des données

  // Verification du format de l'email
  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $email = $_POST['email'];
  } else {
    // Si l'email est incorrect 
    // header('location: contact.php'); 									// Ligne à remplacer
    $affichage_retour .= 'Adresse mail incorrecte<br>';
    $erreurs++;
  }

  // Si le champ email est vide
} else {
  // header('location: contact.php'); 									// Ligne à remplacer
  $affichage_retour .= 'Le champ EMAIL est obligatoire<br>';
  $erreurs++;
}

// Vérification des données du formulaire
// Exemple pour le nom

if (!empty($_POST['nom'])) {
  $nom = $_POST['nom'];
} else {
  header('location: ../contact.php');
}

if (!empty($_POST['email'])) {
  // Si le champ email contient des données
  // Verification du format de l'email
  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $email = $_POST['email'];
  } else {
    // Si l'email est incorrect on retourne au formulaire  
    header('location: ../contact.php');
  }
  // Si le champ email est vide, on retourne au formulaire     
} else {
  header('location: ../contact.php');
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$message = $_POST['message'];

// Préparation des variables pour l'envoi du mail de confirmation
$subject_confirmation = 'Confirmation de votre demande sur SAE105';
$message_confirmation = "Bonjour $prenom $nom,\nNous avons bien pris en compte votre demande.";
$headers_confirmation = array();
$headers_confirmation[] = 'From: mmi22d08@mmi-troyes.fr';
$headers_confirmation[] = 'Reply-to: no-reply@mmi-troyes.fr';
$headers_confirmation[] = 'X-Mailer: PHP/' . phpversion();

// Envoi du mail de confirmation
mail($email, $subject_confirmation, $message_confirmation, implode("\r\n", $headers_confirmation));

// Préparation des variables pour l'envoi du mail de contact
$subject = 'SAE105 : demande de ' . $prenom . ' ' . $nom;
$headers['From'] = $email;              // Pour pouvoir répondre à la demande de contact
$headers['Reply-to'] = $email;            // On donne l'adresse de l'utilisateur comme adresse de réponse
$headers['X-Mailer'] = 'PHP/' . phpversion();      // On précise quel programme à généré le mail

// On fixe l'adresse du destinataire - Pour ce Mail il s'agit de notre adresse MMI@mmi-troyes.fr
$email_dest = "MMI22d08@mmi-troyes.fr";

//Envoi du mail avec confirmation d'envoi (ou pas)
if (mail($email_dest, $subject, $message, $headers)) {
  echo "Mail de Contact OK";                  // On confirme l'envoi du message
} else {
  echo "Erreur d'envoi du mail de contact";          // Le message n'a pas été envoyé - Erreur de traitement
}

// Vérification des données du formulaire

$affichage_retour = '';                            // Lignes à ajouter au début des vérifications
$erreurs = 0;

// Exemple pour le nom
if (!empty($_POST['nom'])) {
  $nom = $_POST['nom'];
} else {
  // header('location: contact.php'); 									// Ligne à remplacer
  $affichage_retour .= 'Le champ NOM est obligatoire<br>';
  $erreurs++;
}


// Exemple pour l'adresse mail
if (!empty($_POST['email'])) {
  // Si le champ email contient des données

  // Verification du format de l'email
  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $email = $_POST['email'];
  } else {
    // Si l'email est incorrect 
    // header('location: contact.php'); 									// Ligne à remplacer
    $affichage_retour .= 'Adresse mail incorrecte<br>';
    $erreurs++;
  }

  // Si le champ email est vide
} else {
  // header('location: contact.php'); 									// Ligne à remplacer
  $affichage_retour .= 'Le champ EMAIL est obligatoire<br>';
  $erreurs++;
}



?>

?>
<!DOCTYPE html>
<html>

<head>
  <title>Contact Form</title>
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>

<body class="envoi_mail-background">
  <?php
  require '../header.php';
  ?>
  <nav class="envoi">
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li><a href="../contact.php">Contact</a></li>
    </ul>
  </nav>
  <main class="envoi">
    <?php
    if ($erreurs == 0) {                                       // aucune erreur
      echo '<div id="reussite" class="envoi">' . "\n";
      echo '<p>' . $affichage_retour . '</p>' . "\n";
      echo '<p>Votre message a été envoyé avec succès !</p>' . "\n";
      echo '<form action="../index.php">' . "\n";
      echo '<button type="submit">Retour</button>' . "\n";        // on retourne sur la page accueil
      echo '</form>' . "\n";
      echo '</div>' . "\n";
    } else {                                                  // Erreurs de saisie ou d'envoi du mail
      echo '<div id="echec" class="envoi">' . "\n";
      echo '<p>' . $affichage_retour . '</p>' . "\n";
      echo '<p>Votre message na pas pu être envoyé</p>' . "\n";
      echo '<form action="../contact.php">' . "\n";
      echo '<button type="submit">Retour</button>' . "\n";        // on retourne sur la page accueil
      echo '</form>' . "\n";
      echo '</div>' . "\n";
      $to = 'destinataire@exemple.com';
      $subject = 'Sujet du message';
      $message = '
          <html>
          <head>
            <title>Titre du message</title>
          </head>
          <body>
            <h1>Bonjour !</h1>
            <p>Ceci est un message HTML</p>
            <ul>
              <li>Item 1</li>
              <li>Item 2</li>
            </ul>
          </body>
          </html>
          ';

      $headers['MIME-Version'] = '1.0';
      $headers['content-type'] = 'text/html; charset=utf-8';

      mail($to, $subject, $message, implode("\r\n", $headers));
    }
    ?>
  </main>
  <?php
  require '../footer.php';
  ?>
</body>

</html>