<!DOCTYPE html>
<html>
<head>
<title>ACCUEIL</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php
// Appel du bloc Header et du Menu
require 'header.php';
?>

<?php

if(isset($_POST['submit'])) {
$to = "your@email.com"; // email address where the form submissions will be sent
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$message = $_POST['message'];
$headers = "From: ".$email;

mail($to, $prenom.' '.$nom, $message, $headers);
echo "Your message has been sent. Thank you for contacting us.";

}
?>

<div class="form">
    <form method="post" action="traitements/envoi_mail.php">
        <label for="nom">Nom :  <span>*</span></label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom :  <span>*</span></label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="email">Adresse email :  <span>*</span></label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message :  <span>*</span></label>
        <textarea id="message" name="message" required></textarea>


 <p>Préciser votre demande</p>
        <input type="radio">Information <br>
        <input type="radio">Demande de devis <br>
        <input type="radio">Réclamation <br>

       
        <input type="submit" name="submit" value="Envoyer">
    </form>
</div>


<?php
// Appel du Pied de Page
require 'footer.php';
?>
</body>
</html>