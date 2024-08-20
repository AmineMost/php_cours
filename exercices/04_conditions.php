<?php

/** Exercice 1 : Vérifier la validité d'un âge
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable age est valide (entre 0 et 120)
 *  
 *  Afficher un message indiquant si l'âge est valide ou non 
 * 
 * petit bonus : vérifier que l'âge est un nombre entier et non un décimal (faire des recherches)
 */


$age = 25;

if ($age >= 0 && $age <= 120 && is_int($age)) {
    echo "L'âge est valide.<br>";
} else {
    echo "L'âge n'est pas valide.<br>";
}

/** Exercice 2 : Calculer la réduction
 * 
 *  Objectif : Ecrire une condition qui applique une réduction de 10% si le montant est supérieur à 100 (créer une variable montant), et 5% si le montant est entre 50 et 100€, sinon, aucune réduction n'est appliquée
 * 
 * chercher comment calculer une réduction
 * 
 */

$montant = 120;

if ($montant > 100) {
    $reduction = $montant * 0.10; // Réduction 10%
} elseif ($montant >= 50 && $montant <= 100) {
    $reduction = $montant * 0.05; // Réduction 5%
} else {
    $reduction = 0; 
}

$montant_final = $montant - $reduction;

echo "Le montant final après réduction est de : " . $montant_final . "€<br>";

/** Exercice 3 : Afficher le jour de la semaine
 * 
 *  Objectif : Ecrire une condition 'switch' pour afficher un message en fonction du jour de la semaine, le jour est donnée par une variable $jour en number (1 pour lundi, 2 pour mardi etc...)
 * 
 * exemple : $lundi = 1;
 * $mardi = 2;
 * 
 */

$jour = 10;

switch ($jour) {
    case 1:
        echo "Aujourd'hui, c'est lundi.<br>";
        break;
    case 2:
        echo "Aujourd'hui, c'est mardi.<br>";
        break;
    case 3:
        echo "Aujourd'hui, c'est mercredi.<br>";
        break;
    case 4:
        echo "Aujourd'hui, c'est jeudi.<br>";
        break;
    case 5:
        echo "Aujourd'hui, c'est vendredi.<br>";
        break;
    case 6:
        echo "Aujourd'hui, c'est samedi.<br>";
        break;
    case 7:
        echo "Aujourd'hui, c'est dimanche.<br>";
        break;
    default:
        echo "Jour invalide.<br>";
}

/** Exercice 4 : Comparaison de chaines de caractères
 *  Objectif : Ecrire une condition qui compare si deux variables sont identiques, la condition doit vérifier le type ET la valeur 
 */

$chaine1 = "maximusprime";
$chaine2 = "maximusprime";

if ($chaine1 === $chaine2) {
    echo "Les deux chaînes sont identiques en type et en valeur.<br>";
} else {
    echo "Les deux chaînes ne sont pas identiques.<br>";
}

/** Exercice 5 : Calcul de la moyenne
 *  
 *  Objectif : Ecrire un script qui vérifie si la moyenne trois notes est suffisante pour passer un examen, la moyenne doit être supérieure ou égale à 10 (afficher un message pour chacun des cas)
 * 
 */
$note1 = 12;
$note2 = 8;
$note3 = 10;

$moyenne = ($note1 + $note2 + $note3) / 3;

if ($moyenne >= 10) {
    echo "La moyenne est de " . $moyenne . ". Vous avez réussi l'examen.<br>";
} else {
    echo "La moyenne est de " . $moyenne . ". Vous avez échoué l'examen.<br>";
}

/** Exercice 6 : Tester une variable indéfinie
 * 
 *  Objectif : Ecrire une condition qui utilisera 'isset()' pour vérifier si un variable $var est définie, si elle est définie, afficher sa valeur, sinon afficher un message indiquant qu'elle n'est pas définie
 * 
 * Tentez avec null, '', 0 
 */
$var = 47;

if (isset($var)) {
    echo "La variable est définie et sa valeur est : " . $var . "<br>";
} else {
    echo "La variable n'est pas définie.<br>";
}

/** Exercice 7 : Valider un formulaire
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable $nom est vide avec empty(), si c'est le cas, afficher un message qui demandera à l'utilisateur de remplir le champ
 * 
 * utiliser simplement une variable et vérifiez plusieurs cas possibles
 * 
 */
$nom = 'GUGUS';

if (empty(trim($nom))) {
    echo "Veuillez remplir le champ du nom.<br>";
} else {
    echo "Le champ est rempli avec : " . $nom . "<br>";
}
/** Exercice 8 : Vérification d'un numéro pair ou impair
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable a une valeur paire ou impaire (utiliser modulo)
 * 
 */

/** Exercice 9 : Catégoriser une personne selon son âge
 * 
 *  Objectif : Ecrire une/des condition(s) qui classe une personnee en 'enfant','adolescent','adulte' ou 'senior' selon son age
 */

/** Exercice 10 : Vérifier la cohérence des réponses avec l'opérateur XOR
 * 
 *  Objectif : Ecrire des conditions et vérifier la cohérence de ces réponses
 * 
 *  Exemple : Nous avons une vérification a faire pour vérifier si l'utilisateur se connecte avec son empreinte digitale ou son mdp (il ne peut pas faire les deux en même temps)
 * 
 *  xor : L'une des deux conditions doit être vraie seulement, si les deux sont vraies, alors il retournera false
 *  contrairement à || (or) qui vérifiera si au moins l'une des deux conditions est vraie, même si les deux le sont
 * 
 */

?>