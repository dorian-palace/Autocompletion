<?php
require_once('Select.php');
$var = file_get_contents('php://input');
session_start();
$select = new Select();
// $search = $_POST['search'];
// echo "<pre>";
// var_dump($search);
// echo "</pre>";
// foreach ($result as $results) {
//     echo "<pre>";
//     var_dump($results);
//     echo "</pre>";
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/search.css"> -->
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <script src="search.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="form-container">
        <form class="form" method="POST">
            <input name="search" id="search" type="text" class="input" placeholder="search..." />
            <button id="clear" class="clear-results">clear</button>
        </form>

    </div>
    <div class="results-container>
       <ul class=" results-list" id="list">

        </ul>
    </div>

</body>

</html>