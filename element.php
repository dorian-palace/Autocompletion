<?php
session_start();
require_once('Select.php');
$select = new Select();
$res = $select->getAll();
// echo "<pre>";
// var_dump($res);
// echo "</pre>";


echo $res[0]["nom"];
echo "<br>";
echo $res[0]['description'];