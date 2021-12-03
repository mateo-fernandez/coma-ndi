<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?php $page_title; ?></title>
    <!-- On charge les icônes du site -->
    <link rel="icon" type="image/png" href="assets/img/icons/qlqchose.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/img/icons/qlqchose.png" sizes="64x64" />
    <!-- On charge les scripts css du site -->
    <link rel="stylesheet" href="assets/lib/normalize.css"/>
    <!-- <link rel="stylesheet" href="assets/styles/general.css"/> -->
  </head>
  <body>
    <?php require_once File::getApp(array("views", "element", "header.php")); ?>
    <div class="main">
      <?php
      $filepath = File::getApp(array("views", self::$object, "$view.php"));
      require_once $filepath;
      ?>
    </div>
    <div class="footer">
      Site de projet de la NDI 2021 - COMA
    </div>

    <script defer src="assets/lib/fontawesome.js"></script>
  </body>
</html>


