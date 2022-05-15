
<?php
// require_once('setting/db.php');
require_once('Select.php');

if (isset($_SESSION)) {
    session_start();
}
$word = $_POST['search'];
// var_dump($_POST);
// $var = file_get_contents('php://input');
$select = new Select();
$start = $select->startSearch($word);
$result = $select->searchReq($word);

$getAll = ['startResult' => $start, 'allResult' => $result];
// var_dump($result);
echo (json_encode($getAll));

// $select->getAll();