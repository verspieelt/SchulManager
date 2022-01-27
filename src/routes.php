<?php

use Config\Config1;
use Controller\SiteController;
use Router\Route;

$Config = new Config1;
$SiteController = new SiteController;

Route::add('/', function () use($SiteController)  {
    $SiteController->load("index");
}, ['get', 'post']);


Route::run($Config->basepath);
