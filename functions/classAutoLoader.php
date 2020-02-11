<?php
//classAutoLoader.php

function classAutoLoader($className)
{
    require_once $className . ".php";
}