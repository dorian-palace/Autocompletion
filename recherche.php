<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/search.css">

    <title>Document</title>
</head>
<body>
    <h1>Astral Spoon</h1>
    <h2>résultats trouver :</h2>
</body>
</html>
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
?>
