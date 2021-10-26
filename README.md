# MVC_PHP

Tirer parti de l'héritage

Vous vous souvenez de la fonction membre  dbConnect()  ? Nous avons dû la recopier à l'identique dans 2 classes différentes : PostManager et CommentManager. On a donc la même fonction dans 2 fichiers différents. Et vous savez ce que dit un développeur qui voit ça ? Il dit : 😵.

Nos 2 classes ont besoin d'une fonction commune. Comment leur faire partager cette fonction ? Avec l'héritage !

Utiliser l'héritage avec le modèle
Concrètement, comment se servir de l'héritage dans la pratique ?

On va faire hériter nos classes PostManager et CommentManager d'une nouvelle classe nommée Manager. Cette classe va contenir la fonction de connexion à la base de données :

Vous pouvez voir que la fonction  dbConnect()  n'est ni  private  ni  public  , elle est...  protected . Pourquoi ?
Si je l'avais laissée  private  , les fonctions filles dans   PostManager  et  CommentManager  n'auraient pas pu l'appeler. Le type  protected  est identique à  private  , mais il autorise quand même les classes filles à appeler la fonction. Juste ce qu'il nous faut !

Nos classes PostManager et CommentManager doivent être mises à jour pour qu'elles héritent de Manager (on dit aussi qu'elles "l'étendent", car on utilise le mot-clé extends).

Et... voilà ! Il n'y a rien de plus à changer. Les classes PostManager et CommentManager possèdent maintenant toutes les deux une fonction membre  dbConnect()  ... mais nous n'avons plus besoin de la recopier à l'infini. Le Comité contre la Pollution des Lignes de Code (CPLC) vous dit merci
