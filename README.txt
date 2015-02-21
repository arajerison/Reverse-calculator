/* CALCULETTE POLONAISE (ou INVERSEE)
	Andry RAJERISON */


Recommandations
****************

- Merci d'importer le fichier de la base de donnée  "resultat.sql"

_ Executer l'application avec le script "v-index.php" dans le dossier Calculatrice/Vue/v-index.php 


Fonctionnement de l'appli
**************************

Cette appli est une calculatrice polonaise qui travaille de façon inversée(contrairerement à une calculette normale^^

-  Au départ, l'application débute avec les champs « result » et « input »  initialisés à 0:

-  A chaque clic sur un chiffre, "input" est incrémenté (left shift) du chiffre concerné 

 Lorsqu'on appuie sur une opérande (+*-/), l’opération est  réalisée avec : result (opération) input 
   « input » est mis à zero
   « result » est mis à jour avec le résultat (changement dans la base de données)


Exemple: 2 + 4 *  => 8


- Au départ lorsque l'on tape 2, rien ne se passe; le résultat reste à 0
- Une fois l'opérande cliquée,  0 + 2 est effectuée  
- Lorsque l'on saisit 4, rien ne se passe
- Enfin la derniere opérande effectue la multiplication de 2 (qui est la valeur de result) par 4



