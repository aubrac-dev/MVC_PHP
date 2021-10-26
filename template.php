<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <?= $content ?>
</body>

</html>

<!--
Il y a 2 "trous" à remplir dans ce template : le <title> et le contenu de la page.

Évidemment, on pourrait faire plus compliqué si on voulait (par exemple, on pourrait réserver un espace pour personnaliser le menu). Mais vous voyez l'idée : vous créez la structure de votre page, et vous remplissez les trous par des variables.

Il faut maintenant définir ce qu'on met dans ces variables.

Regardez comment on peut le faire dans la vue indexView.php qui affiche la liste des derniers billets :
-->