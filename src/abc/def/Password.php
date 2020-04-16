<?php


namespace App\abc\def;


class Password
{
    private $password;

    public function __construct(string $password)
    {
        $this->setPassword($password);
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        if (mb_strlen($password) < 8) {
            throw new \InvalidArgumentException('Password is too short');
        }

        $this->password = $password;
    }

    public function isEqual(Password $password2)
    {
        return $this->password === $password2->getPassword();
    }
}