# MVC_PHP

Gérer les erreurs
La gestion des erreurs est un sujet important en programmation. Il y a souvent des erreurs et il faut savoir vivre avec. Mais comment faire ça bien ? 🤔

Si vous vous souvenez de notre routeur, il contient beaucoup de  if .On fait des tests et on affiche des erreurs à chaque fois qu'il y a un problème :

 - Les exceptions à la rescousse
Les exceptions sont un moyen en programmation de gérer les erreurs. Vous en avez peut-être déjà vu dans du code PHP, ça ressemble à ça :

<?php
try {
    // Essayer de faire quelque chose
}
catch(Exception $e) {
    // Si une erreur se produit, on arrive ici
}
En premier lieu, l'ordinateur essaie d'exécuter les instructions qui se trouvent dans le bloc  try  ("essayer" en anglais). Deux possibilités :

Soit il ne se passe aucune erreur dans le bloc  try  : dans ce cas, on saute le bloc  catch  et on passe à la suite du code.

Soit une erreur se produit dans le bloc  try  : on arrête ce qu'on faisait et on va directement dans le  catch  (pour "attraper" l'erreur).

C'est par exemple ce qu'on fait ici pour se connecter à la base de données :

<?php

// Code avant

try {
    $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

// Code après
On essaie de se connecter à la base de données dans le bloc  try . Si tout va bien, on continue (on va dans le "Code après"). Si en revanche il y a un souci lors de la connexion (à l'intérieur du  new PDO  ), alors on récupère l'erreur dans le bloc catch.

On peut afficher l'erreur qui nous a été envoyée avec  $e->getMessage()  .

Pour générer une erreur, il faut "jeter une exception" (oui, on dit ça 😂 ). Dès qu'il y a une erreur quelque part dans votre code, dans une fonction par exemple, vous utiliserez cette ligne :

<?php
throw new Exception('Message d\'erreur à transmettre');
On va utiliser ce mécanisme dans notre code !