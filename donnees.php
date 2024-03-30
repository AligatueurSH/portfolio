<!DOCTYPE html>
<html>
<head>
<title>Données</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body class="donnees-background">

<?php
// Appel du bloc Header et du Menu
require 'header.php';
?>

<main>
<div style="text-align: center;">
<h1><p class="special-line">Données</p></h1>
<style>
    .special-line {
        color: #251a1a;  /* couleur jaune */
    }

    .donnees-background {
    background-image: url("../images/chen.gif");
}
    
</style>

<div>
<!DOCTYPE html>
<html>
<head>
  <title>Pokedex Unova</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <style>
    /* Styles CSS pour styliser le tableau */
    :root {
  --type-normal: #6f6f69;
  --type-fighting: #C22E28;
  --type-flying: #80cef1;
  --type-poison: #A33EA1;
  --type-ground: #E2BF65;
  --type-rock: #B6A136;
  --type-bug: #A6B91A;
  --type-ghost: #735797;
  --type-steel: #B7B7CE;
  --type-fire: #EE8130;
  --type-water: #6390F0;
  --type-grass: #7AC74C;
  --type-electric: #F7D02C;
  --type-psychic: #F95587;
  --type-ice: #96D9D6;
  --type-dragon: #6F35FC;
  --type-dark: #251a1a;
  --type-fairy: #D685AD;
  --legendary: #d4af37;
}
.legendary {
background-color: #da4f37;
}
    table {
      border-collapse: collapse;
      background: linear-gradient(to right, #ffffff, #a7d8e7, #808080);
    }

    th, td {
      border: 8px solid black;
      padding: 10px;
      vertical-align: middle;
      
    }

    th {
      background: linear-gradient(to right, #ffffff, #a7d8e7, #808080);
    }

    .low-defense {
    background-color: #87CEFA;
}
.high-defense {
    background-color: #FB335B;
}

    .low-attack {
    background-color: #87CEFA;
}
.high-attack {
    background-color: #FB335B;
}
.legendary {
    background-color: gold;
}

#pokedexunova th {
    font-size: 1.2em;
    font-weight: bold;
}

#pokedexunova td {
    text-align: center;
}

#pokedexunova td, #pokedexunova th {
    padding: 5px;
    border-width: 1px;
}



  </style>
</head>
<body>

<?php
// Déclaration du fichier et de son chemin dans une variable
$fichier = 'datas/pokedexunova.json';

// Lecture du fichier - On stocke le contenu dans une autre variable
$pokedexunovaJSON = file_get_contents($fichier);

// Décodage du contenu du fichier et transformation en tablau php (array)
$pokedexunovaPHP = json_decode($pokedexunovaJSON,true);
?>

<table id="pokedexunova">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Type 1</th>
      <th>Type 2</th>
      <th>Total</th>
      <th>HP</th>
      <th>Attack</th>
      <th>Defense</th>
      <th>Sp. Atk</th>
      <th>Sp. Def</th>
      <th>Speed</th>
      <th>Generation</th>
      <th>Legendary</th>
    </tr>
  </thead>
  <tbody>
  <?php
foreach ($pokedexunovaPHP as $pokedexunova) {
  echo '<tr class="'. ($pokedexunova['Legendary'] === "TRUE" ? "legendary" : "") .'">';    echo '<td>'.$pokedexunova['#'].'</td>';
    echo '<td>'.$pokedexunova['Name'].'</td>';
    echo '<td style="background-color: var(--type-'.strtolower($pokedexunova['Type 1']).');">'.$pokedexunova['Type 1'].'</td>';
    echo '<td style="background-color: var(--type-'.strtolower($pokedexunova['Type 2']).');">'.$pokedexunova['Type 2'].'</td>';
    echo '<td>'.$pokedexunova['Total'].'</td>';
    echo '<td>'.$pokedexunova['HP'].'</td>';
    echo '<td>'.$pokedexunova['Attack'].'</td>';
    echo '<td>'.$pokedexunova['Defense'].'</td>';
    echo '<td>'.$pokedexunova['Sp. Atk'].'</td>';
    echo '<td>'.$pokedexunova['Sp. Def'].'</td>';
    echo '<td>'.$pokedexunova['Speed'].'</td>';
    echo '<td>'.$pokedexunova['Generation'].'</td>';
    echo '<td>'.$pokedexunova['Legendary'].'</td>';
    echo '</tr>';
}
?>

          </tbody>
        </table>
        <script>
            $(document).ready(function() {
                $('#pokedexunova').DataTable( {
                    language: {
                        url: "https://cdn.datatables.net/plug-ins/1.10.22/i18n/French.json"
                    }
                });
            });
        </script>
        
        </body>
        </html>
        ```

</div></div>
</main>



<?php
// Appel du Pied de Page
require 'footer.php';
?>

</body>
</html>
<style>
</style>
