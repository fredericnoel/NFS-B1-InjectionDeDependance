<?php

date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoader.php';
spl_autoload_register('classAutoLoader');

use \classes\Adresse;

$testAdresse = new Adresse('42', 'Michel Legrand', '76210', 'Bolbec', 'Enkulistan');
var_dump($testAdresse);