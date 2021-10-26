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