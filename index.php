<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">name:<br>
        <input type="text" name="name"><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>
<?php
//Could include virus
// if (isset($_POST["login"])) {
// $name = $_POST["name"];
// echo "Hi {$name}";
// }

//Prevent malicious attacks
if (isset($_POST["login"])) {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Hi {$name}";
}

//For number input
if (isset($_POST["login"])) {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_NUMBER_INT);
    echo "Hi {$name}";
}
