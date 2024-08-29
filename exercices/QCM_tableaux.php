<?php 

/*
1. Qu'est-ce qu'un tableau indexé en PHP ?
A) Un tableau où les clés sont des chaînes de caractères.
B) Un tableau où les clés sont des entiers. X
C) Un tableau qui contient d'autres tableaux.
D) Un tableau qui ne peut contenir que des valeurs numériques.


2. Comment accède-t-on au premier élément d'un tableau indexé $array ?
A) $array[1]
B) $array[0] X
C) $array['0']
D) $array[first]


3. Quelle est la différence principale entre un tableau associatif et un tableau indexé ?
A) Les tableaux associatifs ne peuvent contenir que des chaînes de caractères.
B) Les tableaux associatifs utilisent des chaînes de caractères comme clés. X
C) Les tableaux indexés ne peuvent contenir que des entiers.
D) Les tableaux associatifs sont toujours multidimensionnels.


4. Comment ajouter une clé "age" avec la valeur 25 à un tableau associatif $person ?
A) $person['age'] = 25; X
B) $person->age = 25;
C) $person = ['age' => 25];
D) $person[] = 25;


5. Que retournera l'expression suivante : count($array); où $array = [1, 2, 3]; ?
A) 3 X
B) 2
C) 1
D) 0


6. Comment accéder à l'élément "ville" d'un tableau associatif $address ?
A) $address->ville
B) $address[ville]
C) $address['ville'] X
D) $address{ville}


7. Quel type de tableau est $array = ['nom' => 'Jean', 'age' => 30]; ?
A) Tableau indexé
B) Tableau associatif X
C) Tableau multidimensionnel
D) Tableau mixte


8. Comment parcourt-on un tableau associatif avec une boucle foreach ?
A) foreach ($array as $value) 
B) foreach ($array as $key => $value) X
C) foreach ($array as $index => $value)
D) foreach ($array as $key)


9. Qu'est-ce qu'un tableau multidimensionnel ?
A) Un tableau avec plusieurs types de données.
B) Un tableau contenant des tableaux en tant qu'éléments.
C) Un tableau avec des clés multiples pour chaque élément.
D) Un tableau associatif avec plusieurs niveaux de clés.


10. Comment accède-t-on à la valeur "Paris" dans le tableau multidimensionnel suivant :
php
Copier le code
$cities = [
    'France' => ['Paris', 'Lyon', 'Marseille'],
    'Italie' => ['Rome', 'Milan', 'Naples']
];
A) $cities['France'][1]
B) $cities['France']['Paris']
C) $cities['France'][0]
D) $cities[0]['France']


11. Comment ajoute-t-on un nouvel élément "Bordeaux" à la liste des villes en France dans le tableau ci-dessus ?
A) $cities['France'][] = 'Bordeaux';
B) $cities['France']['Bordeaux'] = 'Bordeaux';
C) $cities['France'] = 'Bordeaux';
D) $cities[] = 'Bordeaux';


12. Quel est le résultat de l'expression suivante : count($cities['Italie']); ?
A) 2
B) 3
C) 4
D) 1


13. Que retournera array_keys($array); pour un tableau associatif ?
A) Un tableau avec toutes les valeurs.
B) Un tableau avec toutes les clés.
C) Une chaîne de caractères contenant toutes les clés.
D) Une chaîne de caractères contenant toutes les valeurs.


14. Comment supprimer une clé "nom" d'un tableau associatif $person ?
A) unset($person['nom']);
B) $person['nom'] = null;
C) $person->nom = null;
D) delete $person['nom'];


15. Comment fusionne-t-on deux tableaux en PHP ?
A) merge($array1, $array2);
B) array_merge($array1, $array2);
C) $array1 + $array2;
D) $array1 += $array2;


16. Quelle fonction est utilisée pour vérifier si une clé existe dans un tableau associatif ?
A) key_exists()
B) array_key_exists()
C) in_array()
D) isset()


17. Quel type de tableau est le suivant : $array = [1, 'nom' => 'Jean', 3, 4]; ?
A) Tableau indexé
B) Tableau associatif
C) Tableau multidimensionnel
D) Tableau mixte


18. Comment accède-t-on au dernier élément d'un tableau $array ?
A) $array[count($array)]
B) $array[count($array) - 1]
C) $array[end($array)]
D) $array[0]


19. Comment inverser l'ordre des éléments dans un tableau en PHP ?
A) array_reverse($array);
B) reverse($array);
C) $array = reverse($array);
D) array_flip($array);


20. Quel est le résultat de count($array) pour un tableau multidimensionnel $array sans spécifier de paramètre COUNT_RECURSIVE ?
A) Le nombre total d'éléments dans le tableau multidimensionnel.
B) Le nombre d'éléments au premier niveau du tableau.
C) Le nombre total de tableaux à l'intérieur du tableau.
D) Zéro, si le tableau est multidimensionnel.

*/