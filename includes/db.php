<?php
// include permettant d'établir une connexion à la base de données (je l'ai très
// peu utilisée car eu quelques soucis..)
session_start();
$cnx = new PDO('mysql:host=127.0.0.1;dbname=nolarkphp', 'userLuke', 'Football64@');
$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$cnx->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
