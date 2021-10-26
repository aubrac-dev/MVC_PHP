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

 - Écriture du contrôleur
Le contrôleur  controller/frontend.php  récupère lui aussi les informations dont on a besoin (id du billet, auteur, commentaire) et les transmet au modèle :
Vous noterez qu'on teste le retour de la requête. Normalement, celle-ci renvoie le nombre de lignes impactées par la requête ou "false" s'il y a eu une erreur. On teste donc s'il y a eu une erreur, et on arrête tout (avec un  die  ) si jamais il y a eu un souci.

Si tout va bien, il n'y a aucune page à afficher. Les données ont été insérées, on redirige donc le visiteur vers la page du billet pour qu'il puisse voir son beau commentaire qui vient d'être inséré ! 

 - Mise à jour de la vue
Il faut aussi modifier un peu la vue qui affiche un billet et ses commentaires (  view/frontend/postView.php  ). En effet, nous devons ajouter le formulaire pour pouvoir envoyer des commentaires !
Rien de spécial, c'est un formulaire quoi. 😅

Il faut juste bien écrire l'URL vers laquelle le formulaire est censé envoyer. Ici, vous voyez que j'envoie vers une action addComment. Hum... ça me fait penser qu'on n'a pas encore écrit le routeur qui appelle le contrôleur ! 

 - Mise à jour du routeur
Bon on y est presque. Ajoutons un elseif dans notre routeur (  index.php  ) pour appeler le nouveau contrôleur  addComment  qu'on vient de créer, et on devrait avoir tout bon !

Ouah ! Eh, il devient dur à lire ce routeur non ?

C'est vrai qu'avec tous ces if imbriqués, ça commence à faire beaucoup... mais il n'y a pas trop le choix. Ceci dit, il y a une meilleure façon de gérer les erreurs, on va en reparler dans un prochain chapitre. 

Comme vous pouvez le voir, je teste si on a bien un ID de billet, mais aussi si un nom d'auteur et un message ont bien été envoyés. Si c'est le cas, j'appelle le contrôleur  addComment  , qui appelle le modèle pour enregistrer les informations en base. Ah, c'est beau quand tout est bien organisé ! 
