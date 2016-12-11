<?php

require("resources/classloader.php");

if (\Config\Config::get("displayerror")) {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
}

$db = new \Database\db();

$q = new \Database\query($db);
$q->setQuery("show tables");
print_r($q->getResult());

$page = new \Page\page();