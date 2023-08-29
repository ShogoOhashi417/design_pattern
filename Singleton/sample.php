<?php

require_once 'singleton.php';

$instans1 = Singleton::getInstance();
$instans2 = Singleton::getInstance();

$instans1_clone = clone $instans1;
?>