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

echo "<p style='text-align: justify; padding: 100px;'>".$res[0]['description']."</p><br>";
echo "<br>";

echo "<img width='400px' style='margin-left: calc(50vw - 200px);' src='image/" . $res[0]['image'] ." '/><br><br>";