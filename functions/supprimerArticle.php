<?php

    function supprArticles() {
        if(!empty($_GET['articleId']) && ctype_digit($_GET['articleId'])) {
            $idArt = $_GET['articleId'];
                if ($pdo = pdo()) {
                $sql = "DELETE FROM articles WHERE articles.id_article = '$idArt'";
                $reponse = $pdo->query($sql);
                $reponse->fetch();
            }
        } else {
            die('pas d\'article');
        }
    }


