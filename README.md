jobfinder
=========

A Symfony project created on June 5, 2017, 11:17 am.

Jobeet - Symfony 3.3

Répertoire github contenant le projet jobeet : 

Documentation contenant l'ensemble des commandes devant être jouer pour passer une installation viable

Requierement :

git
composer
php
mySql
apache
(Ne pas oublier de lancer wamp server)

Clonage du dépôt git

git clone 
Accès au dépôt

Installation des dépendance

composer install
Paramètres (Ces paramètres sont a modifier en fonction de l'environnement) :

database host : 127.0.0.1
database port : null
database name : jobeet
database user : root
database password : null
mailer transport : smtp
mailer host : 127.0.0.1
mailer user : null
mailer password : null
secret : default value
Création de la base de données

php app/console doctrine:database:create
Ajout des tables dans la base de données

php app/console doctrine:schema:update --force
Ajout des données dans la base de données

php app/console doctrine:fixtures:load
Ajout d'un admin

php app/console ens:jobeet:users admin admin
Lancement du serveur

php app/console server:run
Ouvrir un navigateur et entrer l'url suivant : localhost:8000
