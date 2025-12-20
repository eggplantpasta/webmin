<?php

namespace Webmin;

class User {

    public $username = '';
    public $usernameErr = '';
    public $email = '';
    public $emailErr = '';
    public $password = '';
    public $passwordErr = '';
    public $confirmPassword = '';
    public $confirmPasswordErr = '';

    public function validateUsername(): bool
    {

        if (empty(trim($this->username)) || is_null($this->username)) {
            $this->usernameErr = 'Username cannot be empty.';
        } elseif (strlen($this->username) < 3 || strlen($this->username) > 20) {
            $this->usernameErr = 'Username must be between 3 and 20 characters.';
        } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', $this->username)) {
            $this->usernameErr = 'Username can only contain letters, numbers, and underscores.';
        }

        return empty($this->usernameErrmsg);
    }

    public function validateEmail(): bool
    {
        if (empty(trim($this->email)) || is_null($this->email)) {
            $this->emailErr = 'Email cannot be empty.';
        } elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->emailErr = 'Invalid email format.';
        }

        return empty($this->emailErr);
    }

    public function validatePassword(): bool
    {
        if (empty($this->password)) {
            $this->passwordErr = 'Password cannot be empty.';
        } elseif (strlen($this->password) < 8) {
            $this->passwordErr = 'Password must be at least 8 characters long.';
        }

        return empty($this->passwordErr);
    }
}
