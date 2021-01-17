# PROJET Alphascan02

Projet - Mathilde ASSELIN

## Installation

Allez dans le dossier de votre projet. 
Et collez cette ligne dans votre terminal : 

```bash
git clone git@github.com:Mathilde-Asselin/AlphaScan3D_02.git
```

## Add Database

Allez dans Core/Config/config.php et inscrivez vos informations

```php
$dbConfig = [
    "host" => "localhost",
    "dbname" => "Alphascan3D",
    "user" => "root",
    "pass" => "root"
];
```

Allez dans phpmyadmin, cliquez sur importez et selectionnez le fichier sql qui se trouve à la racine du projet 

## Fonctionnement du site

Tout d'abord connectez vous avec vos identifiant, sinon vous n'aurez accès a aucune page

Vos identifiants sont les suivant:

```php
userInformation (admin) :

    "user" => " UserId "
    "password" => " UserId "
```

Pour voir le profil client veuillez créer un compte sur la page "inscription" !
