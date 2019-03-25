<?php
require_once 'config.php';
protect_delet();

if (isset($_GET['caller_id'])) {
    $action = $_GET['caller_id'];

    switch ($action) {
    case 'logout':
        logged_out();
        break;

    case 'delete':
        $id = $_GET['id'];
        deleteUser($id);
        break;

    case 'deletePromo':
        $id = $_GET['id'];
        deletePromo($id);
        break;

    }
}
