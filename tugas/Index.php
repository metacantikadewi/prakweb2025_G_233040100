<?php
require_once __DIR__ . '/../app/controllers/UserController.php';

$controller = new UserController();
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'index': $controller->index(); break;
    case 'detail': $controller->detail($id); break;
    case 'addForm': $controller->addForm(); break;
    case 'add': $controller->add(); break;
    case 'editForm': $controller->editForm($id); break;
    case 'update': $controller->update(); break;
    case 'delete': $controller->delete($id); break;
    default: echo "Halaman tidak ditemukan!"; break;
}
?>