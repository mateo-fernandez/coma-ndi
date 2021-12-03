<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?= $page_title; ?> - CoMa NDI</title>
    <!-- On charge les icônes du site -->
    <link rel="icon" type="image/png" href="assets/img/icons/qlqchose.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/img/icons/qlqchose.png" sizes="64x64" />
    <!-- On charge les scripts css du site -->
    <?php require_once File::getApp(array("views", "element", "inject-css.php")); ?>
</head>
<body>
<?php require_once File::getApp(array("views", "element", "header.php")); ?>
<div class="main">
  <?php require_once File::getApp(array("views", self::$object, "$view.php")); ?>
</div>
<div class="footer">
    Site de projet de la NDI 2021 - COMA
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>


