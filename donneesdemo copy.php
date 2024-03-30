<?php
// Déclaration du fichier et de son chemin dans une variable
$fichier = 'datas/films.json';

// Lecture du fichier - On stocke le contenu dans une autre variable
$tabFilmsJSON = file_get_contents($fichier);

// Décodage du contenu du fichier et transformation en tablau php (array)
$tabFilmsPHP = json_decode($tabFilmsJSON,true);

// Affichage de la structure du tableau
var_dump($tabFilmsPHP);

// Parcours et Affichage du contenu du tableau
for ($i=0;$i<count($tabFilmsPHP);$i++) {
    echo 'Classement :'.$tabFilmsPHP[$i]['place'].'<br>'."\n";
    echo 'Film :'.$tabFilmsPHP[$i]['titre'].'<br>'."\n";
    echo 'Réalisation :'.$tabFilmsPHP[$i]['realisateur'].'<br>'."\n";
    echo 'Année :'.$tabFilmsPHP[$i]['annee'].'<br>'."\n";
    echo 'Pays :'.$tabFilmsPHP[$i]['pays'].'<br>'."\n";
    echo 'Millions d\'entrées :'.$tabFilmsPHP[$i]['million_entrees'].'<br>'."\n";
    echo '================================<br>'."\n";
    }