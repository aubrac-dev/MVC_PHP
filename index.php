<?php
require('controller/frontend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        } elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            } else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        } elseif ($_GET['action'] == 'postmodifycomment') {
            if (isset($_GET['commentId']) && $_GET['commentId'] > 0 && isset($_GET['id']) && $_GET['id'] > 0) {
                modifycomment_post();
            } else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        } elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                } else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            } else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        } elseif ($_GET['action'] == 'modifyComment') {
            if (isset($_GET['commentId']) && $_GET['commentId'] > 0 && isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['authorModify']) && !empty($_POST['commentModify'])) {
                    modifyComment($_GET['id'], $_POST['authorModify'], $_POST['commentModify'], $_GET['commentId']);
                } else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            } else {
                throw new Exception('Aucun identifiant de commenter envoyé');
            }
        }
    } else {
        listPosts();
    }
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
