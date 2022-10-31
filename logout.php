<?php

require_once 'Validation.php';
use Main\Validation;
$login = new Validation;
$login->openSession();

if (isset($_SESSION['username']) && ! empty($_SESSION['username'])) {
    $login->destroySession();
}
header('location: login.php');
