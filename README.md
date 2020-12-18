## APP MAP

# Pré-requis

- Laravel 8
- PHP 7 avec l'extension pour postgreSQL (php7.\*-pgsql)
- PostgreSQL

# Pour lancer le projet

Configurer le fichier .env pour la connexion à la base de données.

Configurer le fichier .env pour l'url de l'application.

php artisan migrate

php artisan serve

# Goal

- Créer une base de données avec deux tables :
    - Table entreprise : FAIT
    - Table employé    : FAIT
- Une map qui affiche les entreprises, en cliquant sur le Marker d'une entreprise 
    on trouve la liste des employés qui appartient à cette dernière : FAIT
- afficher, éditer et supprimer les données d'une entreprise dans un tableau responsive : FAIT
- afficher, éditer et supprimer les données d'un emplyé dans un tableau responsive : FAIT
