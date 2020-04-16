<?php


namespace App\abc;


final class Email
{
    private $value;

    public function __construct(string $email)
    {
        $this->setValue($email);
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('Email is not valid');
        }

        $this->value = $email;
    }
}