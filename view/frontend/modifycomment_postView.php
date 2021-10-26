<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p><a href="index.php">Retour à la liste des billets</a></p>

<div class="news">
    <h3>
        <?= htmlspecialchars($post['title']) ?>
        <em>le <?= $post['creation_date_fr'] ?></em>
    </h3>

    <p>
        <?= nl2br(htmlspecialchars($post['content'])) ?>
    </p>
</div>

<h2>Commentaires</h2>

<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<?php
while ($comment = $comments->fetch()) {
?>
    <p>
        <strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?>
        <?php
        if ($comment['id'] == $commentId) {
            $modifythiscomment = true;
        } else {
            $modifythiscomment = false;
        ?>
            <em>(<a href="index.php?action=postmodifycomment&amp;commentId=<?= $comment['id'] ?>&amp;id=<?= $post['id'] ?>">modifier</a>)</em>
        <?php
        }
        ?>
    </p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
    <?php
    if ($modifythiscomment) {
    ?>
        <h2>Modification du commentaire</h2>

        <form action="index.php?action=modifyComment&amp;commentId=<?= $comment['id'] ?>&amp;id=<?= $post['id'] ?>" method="post">
            <div>
                <label for="authorModify">L'auteur qui modifie</label><br />
                <input type="text" id="authorModify" name="authorModify" autofocus />
            </div>
            <div>
                <label for="commentModify">Commentaire modifié</label><br />
                <textarea id="commentModify" name="commentModify"></textarea>
            </div>
            <div>
                <input type="submit" />
            </div>
        </form>
<?php
    }
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>