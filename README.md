# MVC_PHP

Créer les dossiers
Je pense que ça serait bien d'adopter déjà au minimum l'organisation suivante, que l'on peut retrouver dans un certain nombre projets :

controller/ : le dossier qui contient nos contrôleurs.

view/ : nos vues.

model/ : notre modèle.

public/ : tous nos fichiers statiques publics. On pourra y mettre à l'intérieur un dossier css/, images/, js/, etc.

On retrouve aussi souvent un dossier appelé vendor/ dans lequel on place toutes les bibliothèques tierces (tout le code qui provient d'autres personnes).

Il ne restera en fait que le fichier index.php (notre routeur) à la racine... parce qu'il faut bien appeler un fichier à la base !

Bien sûr, il faut mettre à jour un peu le code, notamment les require , pour que PHP retrouve bien les fichiers dans les bons dossiers !

Vous noterez que  indexView.php  qui était à la racine a été déplacé et renommé  listPostsView.php  pour mieux décrire ce que fait cette vue.

Regrouper par sections du site
Hum, mais c'est bizarre non d'avoir controller/controller.php et model/model.php ? 🤔

Vous commencez à avoir de bons réflexes, j'aime ça ! 😁

En effet, c'est plutôt curieux de n'avoir qu'un seul fichier à l'intérieur pour le contrôleur et le modèle, surtout s'ils ont le même nom que le dossier. En fait, ça nous donne la place de nous étendre quand le site va grossir. L'idée sera de regrouper les contrôleurs, modèles (et même les vues) dans des sections, en fonction des différentes grandes "zones du site".

Si sur mon site j'ai un espace "blog", un espace "forum", un espace "members", je pourrais regrouper les fonctions dans des fichiers au nom de ces sections.

Pour notre blog, je vous propose un autre découpage :

frontend : tout ce qui est côté utilisateur. Affichage des billets, ajout et liste des commentaires...

backend : tout ce qui est pour les administrateurs. Création de billets, modération des commentaires...

Pour l'instant, on n'a codé que le côté frontend, donc on n'aura qu'une section. Mais par la suite si votre site grossit, vous serez heureux de pouvoir un peu découper par section !

Voilà ! Nous avons donc un modèle pour le frontend, un contrôleur pour le frontend, et plusieurs vues regroupées dans un dossier view/frontend !
