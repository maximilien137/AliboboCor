<h1>Articles</h1>
<?php

// Affichage des articles pour les utilisateurs ayant les droits d'admin

if (verifierAdmin()) {
    if ($pdo = pdo()) {
        $champ = $_GET['champ'] ?? "designation";
        $orderby = $_GET['orderby'] ?? "asc";


        $requeteArticles = "SELECT * FROM articles ORDER BY $champ $orderby";
        

        $tableauResultats = "<table>";
        $tableauResultats .= "<thead>";
        $tableauResultats .= "<tr>";
        $tableauResultats .= "<th>";
        $tableauResultats .= genererUrl('Catégories', 'categorie', $champ, $orderby);
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Référence";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= genererUrl('Désignation', 'designation', $champ, $orderby);
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= genererUrl('PUHT', 'puht', $champ, $orderby);
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Taux de TVA";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= genererUrl('Masse', 'masse', $champ, $orderby);
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= genererUrl('Quantité en stock', 'qtestock', $champ, $orderby);
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= genererUrl('Stock de sécurité', 'qtestockesecu', $champ, $orderby);

        $tableauResultats .= "</th>";
        $tableauResultats .= "<th colspan=2>Operation";
        $tableauResultats .= "</th>";
        $tableauResultats .= "</tr>";

        $tableauResultats .= "</thead>";
        $tableauResultats .= "<tbody>";

        $resultatRequeteArticles = $pdo->query($requeteArticles)->fetchAll();
        
        foreach($resultatRequeteArticles as $row) {
            $tableauResultats .= "<tr class=\"trBody\">";
            $tableauResultats .= "<td class=\"tdBody\">" . $row['id_categorie'] . "</td>";
            $tableauResultats .= "<td class=\"tdBody\">" . $row['reference'] . "</td>";
            $tableauResultats .= "<td class=\"tdBody\"><a href=\"index.php?page=articleDetailAdmin&amp;articleId=" . $row['id_article'] . "\">" . $row['designation'] . "</a></td>";
            $tableauResultats .= "<td class=\"tdBody\">" . $row['puht'] . "</td>";
            $tableauResultats .= "<td class=\"tdBody\">" . $row['id_tva'] . "</td>";
            $tableauResultats .= "<td class=\"tdBody\">" . $row['masse'] . "</td>";
            $tableauResultats .= "<td class=\"tdBody\">" . $row['qtestock'] . "</td>";
            $tableauResultats .= "<td class=\"tdBody\">" . $row['qtestockesecu'] . "</td>";
            $tableauResultats .= "<td class=\"tdBody\"><a href=\"index.php?page=articleSuppression&amp;articleId=" . $row['id_article'] . "\">" . "Supprimer</a></td>";
            $tableauResultats .= "<td class=\"tdBody\"><a href=\"index.php?page=articleEdit&amp;articleId=" . $row['id_article'] . "\">" . "Editer</a></td>";
            $tableauResultats .= "</tr>";
            
        }

        $tableauResultats .= "</tbody>";
        $tableauResultats .= "</table>";

        echo $tableauResultats;

    }
} else {
    echo '<p>Vous allez être redirigé dans 5 secondes</p>';
        $redir = '<script> window.setTimeout(() => {
        window.location.href = "http://localhost/Documents/AliboboGroupe/DWWM-Vernon-2022-PHP-Alibobo/" }, 5000)</script>';
        echo $redir;
}