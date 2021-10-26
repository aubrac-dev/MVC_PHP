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
Les noms des classes commencent toujours par une majuscule. Leurs noms de fichiers aussi donc.

Nous y regroupons toutes nos fonctions qui concernent les posts :
Nous n'avons rien fait de spécial à part... regrouper nos fonctions dans une classe. Normalement, les classes sont plus riches (elles contiennent des variables membres), mais je voulais qu'on commence doucement. 😆

Il y a une chose intéressante ici : j'ai choisi de rendre la fonction  dbConnect()  privée. Pourquoi ? Parce que personne n'est censé l'appeler depuis l'extérieur de la classe. C'est une fonction utilitaire qui ne sert qu'aux autres fonctions de la classe.
Ligne 6 et 14, on l'appelle avec  $this->dbConnect()  (on utilise le préfixe  $this  pour faire référence aux fonctions membres de la classe). On est ici autorisé à appeler cette fonction privée puisqu'on est dans la classe. En revanche, on ne pourrait pas l'appeler depuis un autre fichier.

 - La classe CommentManager
Nous faisons la même chose pour la classe  CommentManager  , qui contient toutes les fonctions qui concernent les commentaires :

