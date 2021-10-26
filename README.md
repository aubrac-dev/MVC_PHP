# MVC_PHP

 Ajouter des commentaires
Bon, maintenant qu'on a réorganisé pas mal notre code, reprenons un peu la pratique. Cette fois, on aimerait permettre aux lecteurs d'ajouter des commentaires sur les billets. Que faut-il faire ?

Vous devriez commencer à avoir l'habitude. Ce sera une bonne occasion de pratiquer ! On va faire les choses dans cet ordre :

Écrire le modèle (et créer au besoin des tables en base).

Écrire le contrôleur, pour récupérer les informations et les envoyer à la vue.

Écrire la vue, pour afficher les informations.

Mettre à jour le routeur, pour envoyer vers le bon contrôleur.

 - Écriture du modèle
Il suffit d'ajouter une petite fonction  postComment  dans  model/frontend.php  qui ajoute un commentaire en base :
Rien de bien sorcier. Il faut juste penser à récupérer en paramètres les informations dont on a besoin :

L'ID du billet auquel se rapporte le commentaire

Le nom de l'auteur

Le contenu du commentaire

Le reste des informations (l'ID du commentaire, la date) sera généré automatiquement.

