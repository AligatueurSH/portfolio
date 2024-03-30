<header id="header-principal">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <nav>
    <ul>
      <li><a href="index.php" <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){echo 'class="active"';} ?>>Accueil</a></li>
      <li><a href="donnees.php" <?php if(basename($_SERVER['PHP_SELF']) == 'donnees.php'){echo 'class="active"';} ?>>Données</a></li>
      <li><a href="galerie.php" <?php if(basename($_SERVER['PHP_SELF']) == 'galerie.php'){echo 'class="active"';} ?>>Galerie</a></li>
      <li><a href="contact.php" <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php'){echo 'class="active"';} ?>>Contact</a></li>
      <li><a href="partenaires.php" <?php if(basename($_SERVER['PHP_SELF']) == 'partenaires.php'){echo 'class="active"';} ?>>Partenaires</a></li>
    </ul>
  </nav>
</header>
