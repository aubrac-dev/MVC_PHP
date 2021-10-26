# MVC_PHP

MVC, la Programmation Orientée Objet (POO) 

Comment fonctionne une architecture MVC ?

Dans les chapitres précédents, nous avons petit à petit construit (sans le savoir) les bases d'une architecture MVC.

Nous avons en fait reproduit le même raisonnement que de nombreux développeurs avant nous. En fait, il y a des problèmes en programmation qui reviennent tellement souvent qu'on a créé toute une série de bonnes pratiques que l'on a réunies sous le nom de design patterns.

Un des plus célèbres design patterns s'appelle MVC, qui signifie Modèle - Vue - Contrôleur. C'est celui que nous allons découvrir maintenant.

Le pattern MVC permet de bien organiser son code source. Il va vous aider à savoir quels fichiers créer, mais surtout à définir leur rôle. Le but de MVC est justement de séparer la logique du code en trois parties que l'on retrouve dans des fichiers distincts.

Modèle : cette partie gère les données de votre site. Son rôle est d'aller récupérer les informations « brutes » dans la base de données, de les organiser et de les assembler pour qu'elles puissent ensuite être traitées par le contrôleur. On y trouve donc entre autres les requêtes SQL.

Vue : cette partie se concentre sur l'affichage. Elle ne fait presque aucun calcul et se contente de récupérer des variables pour savoir ce qu'elle doit afficher. On y trouve essentiellement du code HTML mais aussi quelques boucles et conditions PHP très simples, pour afficher par exemple une liste de messages.

Contrôleur : cette partie gère la logique du code qui prend des décisions. C'est en quelque sorte l'intermédiaire entre le modèle et la vue : le contrôleur va demander au modèle les données, les analyser, prendre des décisions et renvoyer le texte à afficher à la vue. Le contrôleur contient exclusivement du PHP. C'est notamment lui qui détermine si le visiteur a le droit de voir la page ou non (gestion des droits d'accès).

Il faut tout d'abord retenir que le contrôleur est le chef d'orchestre : c'est lui qui reçoit la requête du visiteur et qui contacte d'autres fichiers (le modèle et la vue) pour échanger des informations avec eux.

Le fichier du contrôleur demande les données au modèle sans se soucier de la façon dont celui-ci va les récupérer. Par exemple : « Donne-moi la liste des 30 derniers messages du forum numéro 5 ». Le modèle traduit cette demande en une requête SQL, récupère les informations et les renvoie au contrôleur.

Une fois les données récupérées, le contrôleur les transmet à la vue qui se chargera d'afficher la liste des messages.

Le contrôleur sert seulement à faire la jonction entre le modèle et la vue finalement, non ?

Dans les cas les plus simples, ce sera probablement le cas. Mais comme je vous le disais, le rôle du contrôleur ne se limite pas à cela : s'il y a des calculs ou des vérifications d'autorisations à faire, c'est lui qui s'en chargera.

Concrètement, le visiteur demandera la page au contrôleur et c'est la vue qui lui sera retournée, comme schématisé sur la figure suivante. Bien entendu, tout cela est transparent pour lui, il ne voit pas tout ce qui se passe sur le serveur. C'est un schéma plus complexe que ce à quoi vous avez été habitués, bien évidemment : c'est pourtant sur ce type d'architecture que repose un grand nombre de sites professionnels !

Voilà la théorie. Vous avez pu expérimenter la pratique dans les chapitres précédents où, pour notre exemple très simple du blog, nous avions 3 fichiers :

index.php : le contrôleur (chef d'orchestre)

indexView.php : la vue (page HTML...)

model.php : le modèle (requêtes SQL...)

C'est quand même pas mal plus compliqué pour rien non ?

Pour l'instant, c'est vrai qu'on a juste fait du découpage et qu'on n'en voit pas forcément l'intérêt. Mais attendez que le projet se complexifie un peu, et vous allez vite comprendre pourquoi nous avons besoin de cette structure.
--------------------------------------------------------------------------------------------------------------

Notre code est maintenant découpé en 3 fichiers :

Un pour le traitement PHP : il récupère les données de la base. On l'appelle le modèle.

Un pour l'affichage : il affiche les informations dans une page HTML. On l'appelle la vue.

Un pour faire le lien entre les deux : on l'appelle le contrôleur.

Cette structure est bien, mais nous allons faire quelques améliorations cosmétiques. Ce ne sont peut-être que des détails pour vous, mais ça fera une vraie différence à la fin.

Voici ce que nous allons améliorer :

L'anglais

La balise de fermeture PHP

L'utilisation de short open tags

L'indentation


--

Enfin, ce n'est pas obligatoire mais j'ai utilisé les "short open tags" en PHP pour faciliter la lisibilité du code. Ainsi, par exemple :

<?php echo htmlspecialchars($data['title']); ?>
... est devenu :

<?= htmlspecialchars($data['title']) ?>
Cela permet d'éviter d'avoir à écrire echo quand on souhaite juste afficher une variable. Le but est d'être plus lisible dans la vue en enlevant le maximum de code PHP là-dedans (même si on ne peut pas tout enlever).