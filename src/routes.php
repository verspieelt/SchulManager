<?php

use Config\Config;
use Controller\SiteController;
use Router\Route;

$Config = new Config;
$SiteController = new SiteController;

Route::add('/', function () use($SiteController)  {
    $SiteController->load("index");
}, ['get', 'post']);


Route::run($Config->basepath);
