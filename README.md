[![Laravel](https://github.com/pumarc/FootballBets/actions/workflows/laravel.yml/badge.svg)](https://github.com/pumarc/FootballBets/actions/workflows/laravel.yml)
[![PHP Composer](https://github.com/pumarc/FootballBets/actions/workflows/php.yml/badge.svg)](https://github.com/pumarc/FootballBets/actions/workflows/php.yml)

# FootballBets

## Installer l'application depuis un projet Git.
1/ Récupérer le projet sur le serveur GitHub
2/ Lancer un PowerShell (ou command.com), se déplacer dans le répertoire racine du projet ainsi chargé.
3/ Lancer la commande de mise à jour :
	composer update
	Les packages nécessaires sera alors rechargés/mis à jour dans le repository.
4/ Toujours dans ce répertoire, lancer la commande de "régénération" de la clé applicative
	php artisan key:generate
5/ Il faut également mettre en place la base de données :
	php artisan migration
6/ Le lancement du serveur du projet peut alors se faire correctement :
	php artisan serve --port=8002
