<?php
require_once __DIR__ . '/../models/UserModel.php';

class UserController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    public function index() {
        $users = $this->model->getAll();
        include __DIR__ . '/../views/list.php';
    }

    public function detail($id) {
        $user = $this->model->getById($id);
        include __DIR__ . '/../views/detail.php';
    }

    public function addForm() {
        include __DIR__ . '/../views/form_add.php';
    }

    public function add() {
        $this->model->add($_POST['name'], $_POST['email']);
        header("Location: index.php");
    }

    public function editForm($id) {
        $user = $this->model->getById($id);
        include __DIR__ . '/../views/form_edit.php';
    }

    public function update() {
        $this->model->update($_POST['id'], $_POST['name'], $_POST['email']);
        header("Location: index.php");
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php");
    }
}
?>