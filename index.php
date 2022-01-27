<?php

include "src/autoloader.php";
include "src/routes.php";

$_SESSION["userid"] = 1;
ini_set("display_errors", 1);
set_time_limit(5);

if ($_SERVER["REQUEST_URI"] == $Config->basepath) {
    // To nothing
} else {
    if (($_SERVER['REQUEST_URI'] != "/") and preg_match('{/$}', $_SERVER['REQUEST_URI'])) {
        header('Location: ' . preg_replace('{/$}', '', $_SERVER['REQUEST_URI']));
        exit();
    }
}





