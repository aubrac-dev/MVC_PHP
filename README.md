# MVC_PHP

MVC, la Programmation Orientée Objet (POO) 

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