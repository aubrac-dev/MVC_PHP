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

---------------------------------------------------------------------------------------------------------

Le principe de l'héritage
Une classe peut hériter d'une autre classe pour en récupérer toutes ses caractéristiques. Qu'est-ce que ça veut dire ?

Imaginez 2 objets :

Maison

Appartement

Ce sont tous les deux des logements. Il y a toujours une porte d'entrée à ouvrir et à fermer, une température qu'on veut pouvoir modifier, etc. Mais il y a aussi des différences : un appartement est situé à un étage précis, mais pas une maison par exemple.

Le principe de l'héritage est de donner les caractéristiques d'un Logement (la classe parente) aux classes Maison et Appartement (les classes filles) :

La Maison et l'Appartement sont des logements : ils héritent de Logement
La Maison et l'Appartement sont des logements : ils héritent de Logement
Du coup, on pourrait faire une classe Logement qui contiendrait les caractéristiques communes aux maisons et appartements :

<?php

class Logement
{
    private $porte;
    private $temperature;

    public function ouvrirPorte()
    {
        // ...
    }

    public function fermerPorte()
    {
        // ...
    }

    public function modifierTemperature($temperature)
    {
        // ...
    }
}
Et on créerait ensuite des classes Maison et Appartement qui hériteraient de Logement toutes les deux. On utilise pour cela le mot-clé  extends  :

<?php
class Maison extends Logement
{
    // Cette classe comporte automatiquement les variables ($porte, $temperature...) et les fonctions (ouvrirPorte...) de la classe parente
}
<?php
class Appartement extends Logement
{
    // Cette classe comporte automatiquement les variables ($porte, $temperature...) et les fonctions (ouvrirPorte...) de la classe parente
    
    private $etage; // Seuls les appartements sont situés à un étage précis. On définit donc cette variable ici.
}
Voilà le concept en quelques mots. Ça n'a l'air de rien, mais c'est un concept très puissant qui nous aide beaucoup en programmation objet. 🙂

Comment savoir si ça a du sens de faire un héritage ?
On doit pouvoir dire "ClasseA est un ClasseB". Par exemple :

"La Maison est un Logement" (donc Maison hérite de Logement)

"Le Chat est un Animal" (donc Chat hérite de Animal)
