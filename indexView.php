<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>


<?php
while ($data = $posts->fetch())
{
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            <em><a href="post.php?id=<?= $data['id'] ?>">Commentaires</a></em>
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

<!--
Ce code fait 3 choses :

Il définit le titre de la page dans $title. Celui-ci sera intégré dans la balise <title> dans le template.

Il définit le contenu de la page dans $content. Il sera intégré dans la balise <body> du template.
Comme ce contenu est un peu gros, on utilise une astuce pour le mettre dans une variable. On appelle la fonction ob_start() (ligne 3) qui "mémorise" toute la sortie HTML qui suit, puis, à la fin, on récupère le contenu généré avec ob_get_clean()  (ligne 28) et on met le tout dans $content .

Enfin, il appelle le template avec un require. Celui-ci va récupérer les variables $title et $content qu'on vient de créer... pour afficher la page !

Le second point vous paraît sûrement un peu délicat.

À part l'astuce du ob_start() et ob_get_clean() (qui nous sert juste à mettre facilement beaucoup de code HTML dans une variable), le principe est simple. En inversant l'approche, on a un code bien plus flexible pour définir des "morceaux" de page dans des variables.
-->