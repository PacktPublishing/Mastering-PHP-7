<?php

interface Button
{
    public function render();
}

interface FormFactory
{
    public function createButton();
}

class LoginButton implements Button
{
    public function render()
    {
        return '<button name="login">Login</button>';
    }
}

class RegisterButton implements Button
{
    public function render()
    {
        return '<button name="register">Register</button>';
    }
}

class LoginFactory implements FormFactory
{
    public function createButton()
    {
        return new LoginButton();
    }
}

class RegisterFactory implements FormFactory
{
    public function createButton()
    {
        return new RegisterButton();
    }
}

// Client
$loginButtonFactory = new LoginFactory();
$button = $loginButtonFactory->createButton();
echo $button->render();

$registerButtonFactory = new RegisterFactory();
$button = $registerButtonFactory->createButton();
echo $button->render();
