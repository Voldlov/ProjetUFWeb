# Projet Laravel

Au vu du manque de temps pour le Projet UFWeb, nous avons vu avec notre intervenante Laravel pour être noté sur ce projet et le continuer pour son contrôle.

# ProjetUFWeb

Le changement de page se fait, pour l'instant avec les url.

## Projet UF WEB avec :

- Nicolas BARBARISI
    tâches : front (HTML, CSS, JS)
- Lucas GAIO DOS SANTOS
    têches : back (route, view, erreur 404, traduction et changement page en en fr)



## Ce qui est prévut niveau fonctionalité :

1- Les utilisateurs :
 a. Création de compte (avec envoie de mail).
 b. Suppression de compte (avec envoie de mail).
 c. Modification de compte.
 d. Oublie de mot de passe (envoie mail).
 e. Tchat textuel.

2- Les modérateurs :
 a. Correction d'article (modification - un message envoyé au propriétaire).
 b. Supression d'article.
 c. Suppression de compte.
 d. Avertissement.

3- Articles :
 a. Création (par utilisateur)
 b. Modification (par utilisateur et modérateur)
 c. Supression (par utilisateur et modérateur)
 d. Ajout aux favories (par utilisateur)
 e. Achat (si service - par utilisateur)
 
## Notes : 

En soit, l'envois de mail n'est pas compliqué, ni la création, suppression et modification dans la base de donné (relatif aux utilisateurs, admins et article). Un problème, à se jour non corrigé bloque ces fonctionalités, le bug a été détourné dans le branch test pour examen.

Pour ce qui est de la partie e-commerce, les articles spéciaux, nommé projets, propose des titres en vente, ceci, une fois sélectionné sont ajouté dans le corbeille puis sont payé par l'utilisateur, avec de l'argent (l'argent est un variable contenue dans sa table) sur le site. Ces titres sont contenue après dans un string, séparé par ";".

La création d'admin se fait par un chagement d'état dans la base de donné, 0 pour l'utilisateur, 1 pour l'admin, cela change l'affichage et donc les fonctionalités.

Pour ce qui est du front, tout a été fait en HTML/CSS et JS avant d'être intégré dans Laravel. Cela pose un problème, comme avec le liens entre les fichiers .blade.php et les fichiers CSS, JS et le dossier image. Problème à résoudre.