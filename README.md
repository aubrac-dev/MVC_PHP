# MVC_PHP

Utiliser les namespaces

Il y a quand même un nouveau concept que j'aimerais vous présenter...

Le rôle des namespaces
De quoi va-t-on parler aujourd'hui ? Des espaces de nom (namespaces). Leur rôle ? Éviter les collisions de noms de classes.

Imaginez. Vous travaillez sur un gros programme. Vous réutilisez plusieurs bibliothèques. Vous pouvez être sûrs qu'à un moment donné, il va bien y avoir quelqu'un qui a eu l'idée saugrenue de créer une classe  CommentManager  ou  PostManager  tout comme vous ! À ce moment-là, c'est le plantage garanti : on n'a pas le droit d'appeler deux classes par le même nom...

... sauf si on utilise les namespaces bien sûr ! Ils agissent un peu comme des dossiers. Ils vous permettent d'avoir 2 classes du même nom dans votre programme, du temps qu'elles sont dans des namespaces différents :

Utilisation des namespaces
Concrètement, les namespaces ont cette forme :

Entreprise\Projet\Section

Ce sont vraiment comme des dossiers. Vous pouvez en imbriquer autant que vous voulez :

Entreprise\Projet\Section\SousSection\SousSousSection

Dans la pratique, en général on commence par le nom de l'entreprise qui est responsable du projet, suivi du nom du projet. Vous pouvez mettre votre nom ou pseudonyme si vous n'avez pas d'entreprise.

Pour définir un namespace, rien de plus simple. On va déclarer un  namespace  juste avant la définition de la classe :

<?php

namespace OpenClassrooms\Blog\Model; // La classe sera dans ce namespace

require_once("model/Manager.php");

class PostManager extends Manager
{
    // ...
}
Cela a un impact : tous les fichiers qui font appel à cette classe doivent maintenant ajouter le namespace en préfixe. Voilà par exemple à quoi va ressembler la fonction  post()  du contrôleur :

<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function post()
{
    $postManager = new \OpenClassrooms\Blog\Model\PostManager();
    $commentManager = new \OpenClassrooms\Blog\Model\CommentManager();

    // ...
}
Attention : en plaçant la classe Manager dans notre namespace, nous allons avoir un problème pour appeler PDO. En effet, PDO est une classe qui se trouve à la racine (dans le namespace global). Pour régler le problème, il faudra écrire \PDO (ligne 9) :

<?php

namespace OpenClassrooms\Blog\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
        return $db;
    }
}
Eviter la répétition du préfixe
Hum, ça me paraît quand même plus long à écrire tout ça. N'y a-t-il pas moyen d'éviter de répéter le namespace en préfixe à chaque fois ?

Oui, c'est possible. Il faut utiliser le mot-clé  use  en début d'un fichier qui fait régulièrement appel à des classes d'un même namespace :

<?php

use \OpenClassrooms\Blog\Model\PostManager;
use \OpenClassrooms\Blog\Model\CommentManager;

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    // ...
}
Néanmoins, cela peut aussi porter à confusion si nous abusons de cette technique. Je vais donc éviter de faire appel à  use  mais au moins vous savez que ça existe au besoin.
