# MVC_PHP

Passage du modèle en objet

! Nous allons faire quelque chose de modeste pour commencer : nous allons encapsuler le modèle dans une classe.

Histoire de bien faire les choses, on va créer 2 classes car on peut considérer qu'on a 2 types d'objets différents :

PostManager  : un gestionnaire de post de blog

CommentManager  : un gestionnaire de commentaire

On va donc avoir 2 fichiers :

model/PostManager.php

model/CommentManager.php

Pourquoi on parle de PostManager et pas juste de Post ?

On appelle ces classes des "Managers" parce qu'elles vont nous aider à "manager" les posts et les commentaires. C'est leur rôle : effectuer des opérations de lecture et d'écriture sur les tables.

Pourquoi ne pas nommer juste la classe "Post" ? Parce que, par convention, ça voudrait dire que l'objet représenterait un post issu de la base de données. Ça existe, ça se fait, mais ça nécessite de faire de l'hydratation, un sujet plus complexe qu'on ne verra pas ici. Je vous présenterai le concept dans le dernier chapitre si vous êtes curieux. 😉

La classe PostManager
Le fichier qui contient la classe PostManager s'appelle model/PostManager.php.