<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $pagetitle ?? 'Mon Application' ?></title>
    <link rel="stylesheet" href="../../../public/css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>
<div class="container">
    <?php include __DIR__ . '/sidebar.php'; ?>
    <div class="content">
        <?php include __DIR__ . "/../$cheminVueBody"; ?>
    </div>
</div>
<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
