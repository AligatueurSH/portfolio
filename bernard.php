<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
   $('#example').DataTable();
});
</script>
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

<table id="example" class="display" style="width:100%">
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
        echo '<tr>';
        echo '<td>'.$pokedexunova['#'].'</td>';
        echo '<td>'.$pokedexunova['Name'].'</td>';
        echo '<td>'.$pokedexunova['Type 1'].'</td>';
        echo '<td>'.$pokedexunova['Type 2'].'</td>';
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
  <script>
            $(document).ready(function() {
                $('#pokedexunova').DataTable( {
                    language: {
                        url: "https://cdn.datatables.net/plug-ins/1.10.22/i18n/French.json"
                    }
                });
            });
        </script>
</table>

</body>
</html>
