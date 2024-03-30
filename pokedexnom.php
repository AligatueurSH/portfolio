<?php
// Déclaration du fichier et de son chemin dans une variable
$fichier = 'datas/pokedexnom.json';

// Lecture du fichier - On stocke le contenu dans une autre variable
$pokedexnomJSON = file_get_contents($fichier);
$pokedexnomPHP[$i]['Numéro national'] = str_replace("�", "é", $pokedexnomPHP[$i]['Numéro national']);
$pokedexnomPHP[$i]['Numéro national'] = str_replace("�", "a", $pokedexnomPHP[$i]['Numéro national']);



// Décodage du contenu du fichier et transformation en tablau php (array)
$pokedexnomPHP = json_decode($pokedexnomJSON,true);

// Affichage de la structure du tableau
var_dump($pokedexnomPHP);
echo '# : '.$pokedexnomPHP[0]['#'].' name : '.$pokedexnomPHP[0]['Name'];

for ($i=0; $i < count($pokedexnomPHP); $i++) {
    
    echo 'Name :'.$pokedexnomPHP[$i]['Name'].'<br>'."\n";
    echo 'Type 1 :'.$pokedexnomPHP[$i]['Type 1'].'<br>'."\n";
    echo 'Type 2 :'.$pokedexnomPHP[$i]['Type 2'].'<br>'."\n";
    echo 'Total :'.$pokedexnomPHP[$i]['Total'].'<br>'."\n";
    echo 'HP :'.$pokedexnomPHP[$i]['HP'].'<br>'."\n";
    echo 'Attack :'.$pokedexnomPHP[$i]['Attack'].'<br>'."\n";
    echo 'Defense :'.$pokedexnomPHP[$i]['Defense'].'<br>'."\n";
    echo 'Sp. Atk :'.$pokedexnomPHP[$i]['Sp. Atk'].'<br>'."\n";
    echo 'Sp. Def :'.$pokedexnomPHP[$i]['Sp. Def'].'<br>'."\n";
    echo 'Speed :'.$pokedexnomPHP[$i]['Speed'].'<br>'."\n";
    echo 'Generation :'.$pokedexnomPHP[$i]['Generation'].'<br>'."\n";
    echo 'Legendary :'.$pokedexnomPHP[$i]['Legendary'].'<br>'."\n";
    echo '================================<br>'."\n";
    }
