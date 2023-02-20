<?php
require_once('config.php');
require_once('app/controller/ArticleController.php');

$action = isset($_GET['action']) ? $_GET['action'] : 'list';

$controller = new ArticleController();

switch($action) {
    case 'list':
        $controller->list();
        break;
    case 'details':
        $controller->details($_GET['id']);
        break;
    case 'add':
        $controller->add();
        break;
    case 'edit':
        $controller->edit($_GET['id']);
        break;
    case 'delete':
        $controller->delete($_GET['id']);
        break;
    default:
        $controller->list();
        break;
}
?>
