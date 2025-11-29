<?php
require_once __DIR__ . '/../models/User_model.php';

class User {
    private $model;

    public function __construct() {
        $this->model = new User_model();
    }

    public function index() {
        $users = $this->model->getAllUsers();
        include __DIR__ . '/../views/list.php';
    }

    public function detail($id) {
        $user = $this->model->getUserById($id);
        include __DIR__ . '/../views/detail.php';
    }

    public function addForm() {
        include __DIR__ . '/../views/form_add.php';
    }

    public function add() {
        $this->model->addUser($_POST['name'], $_POST['email']);
        header("Location: index.php");
    }

    public function editForm($id) {
        $user = $this->model->getUserById($id);
        include __DIR__ . '/../views/form_edit.php';
    }

    public function update() {
        $this->model->updateUser($_POST['id'], $_POST['name'], $_POST['email']);
        header("Location: index.php");
    }

    public function delete($id) {
        $this->model->deleteUser($id);
        header("Location: index.php");
    }
}
?>