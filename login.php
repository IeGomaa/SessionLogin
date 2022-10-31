<?php

require_once 'Validation.php';
use Main\Validation;

if (isset($_SESSION['username']) && ! empty($_SESSION['username'])) {
    header('location: access.php');
}

if (isset($_POST['email']) && ! empty($_POST['email'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = new Validation();
    $login->filterEmail($email);
    $login->filterPassword($password);
    /*
     * If Data Found
     * 1- Open Session
     * 2- Set Session
     * 3- redirect to access page
     */
    if ($login->checkData()) {
        $login->openSession();
        $_SESSION['username'] = $email;
        header('location: access.php');
    } else {
        /*
         * If Data Not Found
         */
        header('location: login.php');
    }

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="submit" value="send">
</form>
</body>
</html>