<?php
// require_once('setting/db.php');
require_once('Select.php');

if (isset($_SESSION)) {
    session_start();
}
var_dump($_POST);
// $var = file_get_contents('php://input');
$select = new Select();
$result = $select->searchReq($_POST['search']);
// var_dump($result);
echo (json_encode($result));

// $select->getAll();