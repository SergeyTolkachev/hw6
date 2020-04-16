<?php
require_once 'vendor/Autoloader.php';

use App\abc\def\Password;
use App\abc\Email;

$password = new Password('12345678');
$email = new Email('sergei.tolkachev@ukr.net');

echo $password->getPassword();
echo '<br>';
echo $email->getValue();