<?php

require_once 'Validation.php';
use Main\Validation;

$login = new Validation();
$login->openSession();

if (empty($_SESSION['username'])) {
    header('location: login.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Access</title>
</head>
<body>
    <h1>welcome</h1>
    <a href="logout.php">
        <button>Logout</button>
    </a>
</body>
</html>
