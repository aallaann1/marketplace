<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $pagetitle ?? 'Mon Application' ?></title>
    <link rel="stylesheet" href="../../../marketplace/public/css/styles.css">
</head>
<body>


<!-- Menu latéral -->
<div class="sidebar">
    <div class="header">
        <img src="../../../marketplace/public/img/img.png" alt="Logo">
        <h2>MSDM Horizon</h2>
    </div>
    <div class="menu">
        <a href="controleurFrontal.php?action=index&controleur=Dashboard" class="<?= /** @var TYPE_NAME $activePage */
        $activePage == 'dashboard' ? 'active' : '' ?>">Dashboard</a>
        <a href="controleurFrontal.php?action=index&controleur=Produits" class="<?= $activePage == 'produits' ? 'active' : '' ?>">Produits</a>
        <a href="controleurFrontal.php?action=index&controleur=Inventaire" class="<?= $activePage == 'inventaire' ? 'active' : '' ?>">Inventaire</a>
        <a href="controleurFrontal.php?action=ventes" class="<?= $activePage == 'ventes' ? 'active' : '' ?>">Ventes</a>
        <a href="controleurFrontal.php?action=parametres" class="<?= $activePage == 'parametres' ? 'active' : '' ?>">Paramètres</a>
        <a href="controleurFrontal.php?action=mes_suivis" class="<?= $activePage == 'mes_suivis' ? 'active' : '' ?>">Mes suivis</a>
        <a href="controleurFrontal.php?action=compte" class="<?= $activePage == 'compte' ? 'active' : '' ?>">Compte</a>
        <a href="controleurFrontal.php?action=aide" class="<?= $activePage == 'aide' ? 'active' : '' ?>">Aide</a>
    </div>
</div>

<!-- Contenu principal -->
<div class="main-content">

    <!-- Section de l'utilisateur -->
    <div class="user-section">
        <img src="https://static.vecteezy.com/ti/vecteur-libre/p1/26631206-utilisateur-icone-vecteur-symbole-conception-illustration-vectoriel.jpg" alt="user avatar" class="user-avatar">
        <div class="user-info">
            <span class="user-name">Alan</span>
            <a href="controleurFrontal.php?action=afficherCompte&controleur=Utilisateur" class="user-link">Compte</a>
        </div>
    </div>

    <div class="content">
        <?php
        // Vérifier que $cheminVueBody est bien défini avant de l'inclure
        if (isset($cheminVueBody)) {
            include __DIR__ . '/../' . $cheminVueBody;
        } else {
            echo "Erreur : aucune vue spécifique n'a été définie.";
        }
        ?>
    </div>

</div>

<?php include __DIR__ . '/javascript.html'; ?>

</body>
</html>
