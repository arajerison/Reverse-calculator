/* REVERSE CALCULATOR
	Andry RAJERISON */


Recommandations
****************

- Merci d'importer le fichier de la base de donn�e  "resultat.sql"

_ Executer l'application avec le script "v-index.php" dans le dossier Calculatrice/Vue/v-index.php 


Fonctionnement de l'appli
**************************

Cette appli est une calculatrice INVERSEE qui travaille comme ceci:

-  Au d�part, l'application d�bute avec � result � � 0 et � input � � 0 

-  A chaque clic sur un chiffre, "input" est incr�ment� (left shift) du chiffre concern� 

- Lorsqu'on appuie sur une op�rande (+*-/), l�op�ration est  r�alis�e avec : result (op�ration) input 
   � input � est mis � zero
   � result � est mis � jour avec le r�sultat (changement dans la base de donn�es)


Exemple: 2 + 4 *  => 8


- Au d�part lorsque l'on tape 2, rien ne se passe; le r�sultat reste � 0
- Une fois l'op�rande cliqu�e,  0 + 2 est effectu�e  
- Lorsque l'on saisit 4, rien ne se passe
- Enfin la derniere op�rande effectue la multiplication de 2 (qui est la valeur de result) par 4


