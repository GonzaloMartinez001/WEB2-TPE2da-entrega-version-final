<?php

use controller\gameController;
use controller\companyController;
use controller\userController;


require_once "./helpers/helper.php";
include_once './controller/gameController.php';
include_once './controller/companyController.php';
include_once './controller/userController.php';
include_once 'config.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$gameController = new gameController();
$userController = new userController();
$companyController = new companyController();

$action = 'home'; // acción por defecto si no envían
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]){
    case 'home':
        $companyController->home();
        break;
    case 'agregarJuego':
        $gameController->addGame();
        break;
    case 'agregarCompania':
        $companyController->addCompany();
        break;
    case 'formulario':
        $companyController->showForm();
        break;
    case 'login':
        $userController->login();
        break;
    case 'loguear':
        $userController->loginUser();
        break;
    case 'adminPanel':
        $companyController->homeAdmin();
        break;
    case 'gamePanel':
        $userController->showGamePanel();
        break;
    case 'deleteGame':
        $gameController->deleteGame($params[1]);
        break;
    case 'deleteCompany':
        $companyController->deleteCompany($params[1]);
        break;
    case 'showEditGame':
        $gameController->showGameEditForm($params[1]);
        break;
    case 'editGame':
        $gameController->editGame();
        break;
    case 'showEditCompany':
        $companyController->showCompanyEditForm($params[1]);
        break;
    case 'editCompany':
        $companyController->editCompany();
        break;
    case 'logout':
        $userController->logout();
        break;
    case 'selectCompany':
        $companyController->showSelectedCompany();
        break;
    case 'games-company':
        $gameController->getGamesByCompany();
        break;




    default:
        echo "404 Page Not Found";
        break;
}
?>