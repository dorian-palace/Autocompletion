
<?php
session_start();
require_once('Select.php');
$select = new Select();
$res = $select->getAll();
// echo "<pre>";
// var_dump($res[0]['id']);
// echo "</pre>";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/search.css">
    <title>Document</title>
</head>

<body>
<h1><?= $res[0]["nom"]; ?></h1>


 <p class='description' style='text-align: justify; padding: 100px;'>  <?=$res[0]['description'] ?> </p>

<?="<img class='img_result' src='image/" . $res[0]['image'] . " '/><br><br>"?>
</body>

</html>