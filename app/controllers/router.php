<?php
$dossier = opendir(File::getApp(["controllers"]));
while ($fichierController = readdir($dossier)) {
    if (strpos($fichierController, "Controller") !== false) {
        require_once File::getApp(["controllers", $fichierController]);
    }
}

$action = $_GET['action'] ?? "";
$controller = $_GET['controller'] ?? "";
$controller_class = "Controller" . ucfirst($controller);

if (class_exists($controller_class)) {
    if (method_exists($controller_class, $action))
        $controller_class::$action();
    else {
//        $pagetitle = "Erreur 404";
//        $view = "error";
//        require_once File::getApp(array("views", "view.php"));
        echo "error";
    }

} else {
//    $pagetitle = "Erreur 404";
//    $view = "error";
//    require_once File::getApp(array("views", "view.php"));
    echo "error";

}
