<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post"><br>
        <input type="text" name="name">Name<br>
        <input type="text" name="age">Age<br>
        <input type="email" name="email">Email<br>
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

//Prevent malicious attacks. turns html into text
if (isset($_POST["login"])) {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Hi {$name}";
}

//For number input. removes characters that aren't numbers
if (isset($_POST["login"])) {
    $name = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    echo "You're {$age} years of age";
}

#For Email. Removes characters not part of email.
if (isset($_POST["login"])) {
    $name = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    echo "{$email} is your email";
}

//Using filter to validate to invalidate unproper field text.
if (isset($_POST["login"])) {
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
}

if(empty($age)) {
    echo "Number's not valid"
}
else {
    echo"Your age is $age"; 
}

if(empty($email)) {
    echo "Number's not valid"
}
else {
    echo"Your age is $age"; 
}


//Using filter to validate to invalidate unproper field text.
if (isset($_POST["login"])) {
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
}

if (empty($age)) {
    echo "Number's not valid";
} else {
    echo "Your age is $age";
}

if (empty($email)) {
    echo "Email is not valid";
} else {
    echo "Your email is $email";
}

