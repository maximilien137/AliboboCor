<?php

    function editArticles() {
        if(!empty($_GET['articleId']) && ctype_digit($_GET['articleId'])) {
            $idArt = $_GET['articleId'];
                if ($pdo = pdo()) {
                    //UPDATE `articles` SET `designation` = 'hh' WHERE `articles`.`id_article` = 4;
                $sql = "UPDATE `articles` SET `designation` = articles.id_article = '$idArt'";
                $reponse = $pdo->query($sql);
                $reponse->fetch();
            }
        } else {
            die('pas d\'article');
        }
    }
