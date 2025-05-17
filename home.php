<?php 

require "pages/index.php";

$name = $_POST["nome"];
$senha = $_POST["senha"];

if ($name == ""&& $senha == "") {
    $check = true;
};

$page = new index($check);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?echo $page?>
</body>
</html>