<?php
session_start();
require_once('Select.php');
$select = new Select();
$res = $select->searchReq($_GET['search']);
//echo $res[0]["nom"];
// echo "<pre>";
// var_dump($res);
// echo "</pre>";

foreach ($res as $result) {

    // echo "<pre>";
    // var_dump($result);
    echo "
    <li><a href='../element.php?id=" . $result['id'] . "'>"  . $result['nom'] . "</a></li>";
}
