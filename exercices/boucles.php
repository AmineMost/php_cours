<!-- Exercice 5 

Il faut créer un tableau HTML (<table>
<tbody>

</tbody>
</table>)

à l'interieur du tbody il faut générer des lignes et colonnes (<tr><td></td></tr>) tr et td seront générés par les boucles avec à l'interieur des td les coordonnées de la cellule (1,1) = premiere ligne premiere cellule, (1,2) = premiere ligne, deuxième cellule


1,1	1,2	1,3	1,4	1,5
2,1	2,2	2,3	2,4	2,5
3,1	3,2	3,3	3,4	3,5
4,1	4,2	4,3	4,4	4,5
5,1	5,2	5,3	5,4	5,5 -->
<?php
<table>
  <tbody>
 
    for ($i = 1; $i <= 5; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 5; $j++) {
            echo "<td>{$i},{$j}</td>";
        }
        echo "</tr>";
    }
  </tbody>
</table>


// <!-- Exercice 6 :

// prenom : lucie

// nom : Benziam

// email : Benz.lucie@outlook.com
// age : 24 -->

$person = [
    'prenom' => 'Lucie',
    'nom' => 'Benziam',
    'email' => 'Benz.lucie@outlook.com',
    'age' => 24
];

foreach ($person as $key => $value) {
    echo ucfirst($key) . " : " . $value . "<br>";
}
// Exercice 7 :

// • accueil (lien cliquable avec le chemin dans le href)
// • produits (lien cliquable avec le chemin dans le href)
// • contacts (lien cliquable avec le chemin dans le href)

// Exercice 8 :

// 46	08	51	41	68	19	58	56	62	39
// 24	17	57	29	26	56	20	04	92	47
// 53	03	30	91	04	72	77	100	74	85
// 93	07	71	99	49	85	81	50	80	95
// 31	78	52	98	96	11	16	54	90	59
// 84	43	40	03	42	36	24	76	09	57
// 70	20	47	89	73	43	78	09	26	35
// 18	64	98	84	26	58	03	01	17	37
// 37	86	67	72	93	96	94	60	90	05
// 17	80	25	64	41	76	96	24	94	66

// Exercice 9 

// janvier	01	02	03	04	05	06	07	08	09	10	11	12	13	14	15	16	17	18	19	20	21	22	23	24	25	26	27	28	29	30	31
// fevrier	01	02	03	04	05	06	07	08	09	10	11	12	13	14	15	16	17	18	19	20	21	22	23	24	25	26	27	28	29	30	31
// mars	01	02	03	04	05	06	07	08	09	10	11	12	13	14	15	16	17	18	19	20	21	22	23	24	25	26	27	28	29	30	31
// avril	01	02	03	04	05	06	07	08	09	10	11	12	13	14	15	16	17	18	19	20	21	22	23	24	25	26	27	28	29	30	31
// mai	01	02	03	04	05	06	07	08	09	10	11	12	13	14	15	16	17	18	19	20	21	22	23	24	25	26	27	28	29	30	31
// juin	01	02	03	04	05	06	07	08	09	10	11	12	13	14	15	16	17	18	19	20	21	22	23	24	25	26	27	28	29	30	31
// juillet	01	02	03	04	05	06	07	08	09	10	11	12	13	14	15	16	17	18	19	20	21	22	23	24	25	26	27	28	29	30	31
// aout	01	02	03	04	05	06	07	08	09	10	11	12	13	14	15	16	17	18	19	20	21	22	23	24	25	26	27	28	29	30	31
// septembre	01	02	03	04	05	06	07	08	09	10	11	12	13	14	15	16	17	18	19	20	21	22	23	24	25	26	27	28	29	30	31
// octobre	01	02	03	04	05	06	07	08	09	10	11	12	13	14	15	16	17	18	19	20	21	22	23	24	25	26	27	28	29	30	31
// novembre	01	02	03	04	05	06	07	08	09	10	11	12	13	14	15	16	17	18	19	20	21	22	23	24	25	26	27	28	29	30	31
// decembre	01	02	03	04	05	06	07	08	09	10	11	12	13	14	15	16	17	18	19	20	21	22	23	24	25	26	27	28	29	30	31

// Exercice 10 :

// 1. personne1
// 	prenom : Daenerys
// 	nom : Targaryen
// 	age : 23 ans à sa mort
    
// 2. personne2
// 	prenom : Rhaenyra
// 	nom : Targaryen
// 	age : 33 ans à sa mort
    
// 3. personne3
// 	prenom : Daemon
// 	nom : Targaryen
// 	age : 49 ans à sa mort
<?