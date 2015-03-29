![Increase logo](http://open-beer.kobject.net/img/Increase.png "Increase logo")
# increase
A Phalcon web application to manage the progress of projects, and improve communication with the customer
#Howto

- [x] fork your own copy of this repository.
- [x] read the project specifications : [Increase project specifications](http://slamwiki.kobject.net/slam4/php/phalcon/project/increase/)

Projet réalisé par Paul Lemesnager (Pseudo GitHub : PaulLmsg). J'ai recontré de nombreux problèmes avec github c'est pour cela que je ne commit qu'à la fin, je m'en excuse (mêmes problèmes pour my-open-beer-angular).

Pour accéder à l'application il faut aller directement à l'adresse "http://localhost/increase/user/projects/:idUser"

#Fonctionnalités implémentées :

- [x] Les modèles et les relations ont été fait 
- [x] La liste des projets d'un client à l'adresse "user/projects/:idUser" :
	- [x] L'état d'avancement du projet (pourcentage)
	- [x] Le retard du projet (couleurs et nombre de jours restants)
	- [x] L'affichage des détails du projet (le bouton "Ouvrir le projet...")
	
- [x] Affichage d'un projet d'un client à l'adresse "user/project/:id" :
	- [x] Les détails du projet (description et dates)
	- [x] L'affichage de l'équipe n'est pas complet, il manque le poids et les use cases.
	
- [x] La liste des projets d'un client à l'adresse "author/projects/:idUser" :
	- [x] L'état d'avancement du projet (pourcentage)
	- [x] Le retard du projet (couleurs et nombre de jours restants)
	- [x] L'affichage des détails du projet (le bouton "Ouvrir le projet...") mais celui-ci renvoie vers "user/project/:id" car je n'ai pas réussi à faire l'affichage d'un projet en détail d'un auteur

- [x] Affichage d'un projet d'un author à l'adresse "author/project/:id" non fait.

- [x] Connexion et tâches non faits.




