<?php

/** Exercice 1 : Concaténation simple
 *  
 *  1 . Créer deux variables nom et prenom et affecter les valeurs de son choix
 * 
 *  2 . Concatener ces deux variables pour afficher une chaîne de caractère du nom et prénom complets avec echo
 */

$nom = 'dupont';
$prenom = 'roger';

echo $nom . ' ' . $prenom;
echo "<br> $nom $prenom";

/** Exercice 2 : Concatenation avec des phrases
 * 
 *  1 . Créer une variable phrase1 qui contiendra la chaine de caractères : Le ciel est
 * 
 *  2 . Créer une variable phrase2 qui contiendra la chaine de caractères : bleu aujourd'hui 
 * 
 *  3 . Concatener les deux variables en utilisant variable . variable et afficher le resultat avec echo
 */

$phrase1 = 'Le ciel est';
$phrase2 = 'bleu aujourd\'hui';

echo "<br> $phrase1 " . "$phrase2";
echo "<br> $phrase1 $phrase2";
echo "<br>";
echo $phrase1 . ' ' . $phrase2;

/** Exercice 3 : Utilisation de virgules dans echo
 * 
 *  1 . Créer trois variables mot1 qui contiendra : J'aime, mot2 : le et mot3 : PHP
 * 
 *  2 . Utiliser echo pour afficher les trois mots séparés par des virgules plutot que par le point de concatenation ( . )
 * 
 *  j'aime le php 
 */

$mot1 = 'J\'aime ';
$mot2 = 'le ';
$mot3 = 'PHP ';

echo '<br>' . $mot1, $mot2, $mot3;
print "<br> $mot1 $mot2 $mot3";

/** Exercice 4 : Concatenation avec l'opérateur combiné ".="
 * 
 *  1 . Créer une variable texte avec la valeur : je vais
 * 
 *  2 . Utiliser l'opérateur combiné pour ajouter : à la plage
 * 
 *  3 . Afficher le resultat
 * 
 */

$str1 = 'salut,';
$str1 .= 'coucou';
echo "<br>$str1<br>";

$text = 'je vais';
$text .= ' à la plage';
echo "$text<br> ";

/** Exercice 5 : Echapper les guillemets
 * 
 *  1 . Créer une variable citation qui contiendra la chaine de caractères suivante : 'Il a dit : "Le PHP est fantastique"'
 * 
 *  2 . S'assurer que les guillemets dans la chaine sont correctement échappés pour éviter les erreurs de syntaxe
 * 
 *  3 . Afficher la citation
 * 
 */

$citation = 'Il a dit "Le PHP est fantastique"';

echo "$citation <br>";

/** Exercice 6 : Quotes simples et doubles
 * 
 *  1 . Créer une variable mot qui contiendra la chaine de caractères : PHP
 * 
 *  2 . Utiliser echo pour afficher cette variable à l'interieur d'une chaine entourée de quotes doubles (exemple : echo "le mot est : $mot")
 * 
 *  3 . Faire la même chose mais avec des quotes simple et observer la différence
 * 
 */

 $mot = 'PHP';

 echo 'le mot est : $mot <br>';
 echo "le mot est : $mot <br>";

 /** Exercice 7 : Utilisation de variables dans les chaines
 * 
 *  1 . Créer une variable nom avec une valeur.
 * 
 *  2 . Utiliser echo pour afficher une phrase qui dit : "Bonjour, (nom), bienvenue sur notre site!", en utilisant la variable nom à la place de (nom)
 */

 $nom = 'Gregory';
 print "Bonjour, $nom, bienvenu sur notre site! <br>";

/** Exercice 8 : Concaténation et guillemets
 * 
 *  1 . Créer une variable citation contenant la phrase suivante : 'la vie est belle'
 * 
 *  2 . Concatener cette phrase avec une deuxième chaine qui dit : ', surtout quand on code en PHP!'
 * 
 *  3 . Afficher la phrase complete en entourant le tout de guillemets doubles
 */

$citation = '"la vie est belle';
echo '<br>';
$citation .= ', surtout quand on code en php !"'; // La variable gardera ses guillemets même si on en veut plus

echo '"' ."$citation" . '"';

/** Exercice 9 : Concaténation et opérations mathématique
 * 
 *  1 . Créer deux variables a et b qui contiendront les nombres 5 et 10
 * 
 *  2 . Utiliser la concaténation pour afficher une phrase comme : "La somme de 5 et 10 est 15" (en remplaçant 5 et 10 par les variables et 15 par le calcul de ces deux variables)
 * 
 */

$a = 5;
$b = 10;

$phrase = 'La somme de 5 et 10 est : ';
echo '<br>';

echo $a + $b; // solution 1 : ecrire directement le resultat du calcul
$c = $a + $b; // solution 2 : créer une variable pour stocker le resultat
$phrase .= $c;  // solution 3 : concatener dans la phrase elle même
echo '<br>';
echo $phrase;

// echo '<br>';
// echo $phrase . ($a + $b);
// echo "$phrase $c";
