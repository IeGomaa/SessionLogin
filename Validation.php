<?php

namespace Main;

class Validation
{
    private $dbEmail = 'dev.ibrahim@gmail.com';
    private $dbPassword = '123';
    private $email;
    private $password;

    public function filterEmail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE);
        if (!is_null($email)) {
            $this->email = $email;
        } else {
            return 'Email Not Valid !';
        }
    }

    public function filterPassword($password)
    {
        $password = filter_var($password, FILTER_SANITIZE_STRING);
        $this->password = $password;
    }

    public function checkData()
    {
        if ($this->email === $this->dbEmail && $this->password === $this->dbPassword) {
            return true;
        }
        return false;
    }

    public function openSession()
    {
        session_start();
    }

    public function destroySession()
    {
        session_destroy();
    }

}