<?php
session_start();
require_once('Select.php');
$select = new Select();
$res = $select->getAll();
echo "<pre>";
var_dump($res[0]['id']);
echo "</pre>";


echo $res[0]["nom"];
echo "<br>";
echo "<br>";

echo $res[0]['description']."<br>";
echo "<br>";

echo "<img src='image/" . $res[0]['image'] ." '/>";