QCM :

1 : C ,<br>
2 : C ,<br>
3 : B , <br>
4 : B ,<br>
5 : A ,<br>

 

1) la commande permettant de creer les modles Eleves et ,Club , <br>Activite, avec leur fichier de migration 
1- Eleve : php artisan make:model Eleve -m<br>
1- Club : php artisan make:model Club -m<br>
1- Actvite : php artisan make:model Actvite -m<br>
2) Edition des fonction up() des fichiers de migration :
Veulliez voir les fichiers de migration <br>

3) 



4) Les commandes necessaire permettant de lancer les migrations 
et excuter les seeders :
1- php artisan migrate 
2- php artisan make:seeder NomOfTheSeeder (ActviteSeeder,ClubSeeder,EleveSeeder) .
5) 
. lancer les seeder : php artisan db:seed 
. lancer les migration : php artisan migrate 
. supprimer les tables : php artisan db:wipe  

6) la creation des controller : 
php artisan make:controller (EleveController,ActvitieController,ClubController) 


7) voir le code 

8) voir le code 

9) voire le code 

10) voir le code 

11) voire le code 

12) Voire le code 


13) Voire le code 


bonnus :

--- Le fichier : qui existe dans le chemin app/conf/nginx-site.conf 
est une fichier de configuration d"un server web qui s"appel nginx pour faire 
le depoilemet de l"application .
--- Le fichier Docker est un fichier 
Ce fichier est un Dockerfile utilisé pour construire une image Docker basée sur l'image richarvey/nginx-php-fpm:1.7.2. Il copie les fichiers du répertoire local dans l'image, définit plusieurs variables d'environnement pour configurer l'environnement de l'application Laravel, et spécifie une commande pour démarrer le conteneur basé sur cette image.