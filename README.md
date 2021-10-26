# MVC_PHP

MVC, la Programmation Orientée Objet (POO) 

On va travailler ici sur 2 fichiers :

index.php : ce sera le nom de notre routeur. Le routeur étant le premier fichier qu'on appelle en général sur un site, c'est normal de le faire dans index.php. Il va se charger d'appeler le bon contrôleur.

controller.php : il contiendra nos contrôleurs dans des fonctions. On va y regrouper nos anciens index.php et post.php.

On va faire passer un paramètre action  dans l'URL de notre routeur index.php pour savoir quelle page on veut appeler. Par exemple :

index.php?action=listPosts : va afficher la liste des billets.

index.php?action=post : va afficher un billet et ses commentaires.

Certains trouvent que l'URL n'est plus très jolie sous cette forme. Peut-être préféreriez-vous voir monsite.com/listposts plutôt que index.php?action=listPosts.
Heureusement, cela peut se régler avec un mécanisme de réécriture d'URL (URL rewriting). On ne l'abordera pas ici, car ça se fait dans la configuration du serveur web (Apache), mais vous pouvez vous renseigner sur le sujet si vous voulez !

Intéressons-nous maintenant à notre routeur index.php :

Il a l'air un peu compliqué parce qu'on y fait pas mal de tests, mais le principe est tout simple : appeler le bon contrôleur. Ça donne :

On charge le fichier controller.php (pour que les fonctions soient en mémoire, quand même !).

On teste le paramètre action pour savoir quel contrôleur appeler. Si le paramètre n'est pas présent, par défaut on charge la liste des derniers billets (ligne 18). C'est comme ça qu'on indique ce que doit afficher la page d'accueil du site.

On teste les différentes valeurs possibles pour notre paramètre action et on redirige vers le bon contrôleur à chaque fois.

Vous remarquerez que c'est dans le routeur qu'on teste la présence de l'id dans l'URL pour l'affichage d'un post (ligne 9). On aurait pu laisser ce test dans le contrôleur, mais c'est normalement le rôle du routeur de vérifier que tous les paramètres sont présents dans l'URL avant de charger le contrôleur.
